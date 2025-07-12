# Sử dụng Laravel Sail base image (đã có sẵn PHP 8.2 và Composer)
FROM laravelsail/php82-composer:latest

# Cài đặt Nginx và Supervisor
RUN apt-get update && apt-get install -y nginx supervisor

# Composer đã có sẵn trong Laravel Sail image

# Tạo thư mục làm việc
WORKDIR /var/www/html

# Copy composer files, artisan, bootstrap và routes
COPY composer.json composer.lock artisan ./
COPY bootstrap ./bootstrap
COPY routes ./routes

# Tạo file .env cơ bản
RUN echo "APP_NAME=Laravel" > .env && \
    echo "APP_ENV=production" >> .env && \
    echo "APP_KEY=" >> .env && \
    echo "APP_DEBUG=false" >> .env && \
    echo "APP_URL=http://localhost" >> .env && \
    echo "LOG_CHANNEL=stack" >> .env && \
    echo "LOG_DEPRECATIONS_CHANNEL=null" >> .env && \
    echo "LOG_LEVEL=debug" >> .env && \
    echo "DB_CONNECTION=sqlite" >> .env && \
    echo "DB_DATABASE=/var/www/html/database/database.sqlite" >> .env && \
    echo "BROADCAST_DRIVER=log" >> .env && \
    echo "CACHE_DRIVER=file" >> .env && \
    echo "FILESYSTEM_DISK=local" >> .env && \
    echo "QUEUE_CONNECTION=sync" >> .env && \
    echo "SESSION_DRIVER=file" >> .env && \
    echo "SESSION_LIFETIME=120" >> .env

# Tạo thư mục cần thiết
RUN mkdir -p storage/framework/{sessions,views,cache} \
    && mkdir -p storage/logs \
    && mkdir -p bootstrap/cache

# Cài đặt PHP dependencies với verbose output
RUN composer install --no-dev --optimize-autoloader --no-interaction --verbose

# Copy toàn bộ source code (trừ public/storage nếu là symbolic link)
COPY . .

# Xóa symbolic link public/storage nếu tồn tại và tạo lại
RUN rm -f public/storage

# Cài đặt Node.js và NPM
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

# Cài đặt NPM dependencies và build assets
RUN npm install && npm run build

# Tạo thư mục storage và cache
RUN mkdir -p storage/framework/{sessions,views,cache} \
    && mkdir -p storage/logs \
    && chmod -R 775 storage \
    && chmod -R 775 bootstrap/cache

# Tạo symbolic link cho storage
RUN php artisan storage:link

# Copy Nginx configuration
COPY docker/nginx.conf /etc/nginx/sites-available/default

# Copy Supervisor configuration
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Copy startup script
COPY docker/start.sh /start.sh
RUN chmod +x /start.sh

# Expose port 80
EXPOSE 80

# Start services
CMD ["/start.sh"] 