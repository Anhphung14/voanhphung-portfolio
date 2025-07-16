# Sử dụng PHP 8.2 FPM image
FROM php:8.2-fpm

# Cài đặt dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    nginx \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Cài đặt Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Tạo thư mục làm việc
WORKDIR /var/www/html

# Copy composer files, artisan, bootstrap, routes và storage
COPY composer.json composer.lock artisan ./
COPY bootstrap ./bootstrap
COPY routes ./routes
COPY storage ./storage

# Cài đặt PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Copy source code (trừ public/storage nếu là symbolic link)
COPY . .

# Xóa symbolic link public/storage nếu tồn tại và tạo lại
RUN rm -f public/storage

# Cài đặt Node.js và build assets
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && npm install \
    && npm run build

# Tạo thư mục cần thiết
RUN mkdir -p storage/framework/{sessions,views,cache} \
    && mkdir -p storage/logs \
    && mkdir -p bootstrap/cache \
    && chmod -R 775 storage \
    && chmod -R 775 bootstrap/cache

# Tạo .env file với APP_KEY được generate thủ công
RUN echo "APP_NAME=Laravel" > .env && \
    echo "APP_ENV=production" >> .env && \
    echo "APP_DEBUG=false" >> .env && \
    echo "APP_URL=http://localhost" >> .env && \
    echo "LOG_CHANNEL=stack" >> .env && \
    echo "DB_CONNECTION=sqlite" >> .env && \
    echo "DB_DATABASE=/var/www/html/database/database.sqlite" >> .env && \
    echo "CACHE_DRIVER=file" >> .env && \
    echo "SESSION_DRIVER=file" >> .env && \
    echo "QUEUE_CONNECTION=sync" >> .env && \
    echo "APP_KEY=base64:$(openssl rand -base64 32)" >> .env

# Cache config
RUN php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache

# Tạo symbolic link cho storage
RUN php artisan storage:link

# Copy Nginx config
COPY nginx.conf /etc/nginx/sites-available/default

# Copy startup script
COPY start.sh /start.sh
RUN chmod +x /start.sh

# Expose port (Cloud Run sẽ set PORT env var)
EXPOSE 8080

# Start Nginx
CMD ["/start.sh"] 