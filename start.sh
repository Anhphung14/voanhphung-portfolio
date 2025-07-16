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

# Tạo symbolic link cho storage
php artisan storage:link

# Khởi động PHP-FPM
php-fpm -D

# Khởi động Nginx
nginx -g "daemon off;" 