#!/bin/bash

# Tạo thư mục cần thiết
mkdir -p /var/www/html/storage/framework/{sessions,views,cache}
mkdir -p /var/www/html/storage/logs
mkdir -p /var/www/html/bootstrap/cache

# Set permissions
chown -R www-data:www-data /var/www/html/storage
chown -R www-data:www-data /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage
chmod -R 775 /var/www/html/bootstrap/cache

# Tạo .env file nếu chưa có
if [ ! -f /var/www/html/.env ]; then
    cp /var/www/html/.env.example /var/www/html/.env
    php artisan key:generate
fi

# Cache config và routes
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Tạo symbolic link cho storage
php artisan storage:link

# Chạy migration nếu cần
php artisan migrate --force

# Khởi động Supervisor
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf 