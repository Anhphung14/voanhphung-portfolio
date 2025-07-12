# 🚀 HƯỚNG DẪN DEPLOY WEBSITE LARAVEL

## 📦 Bước 1: Đóng gói project

### Chạy script deploy:
```bash
# Windows
deploy-script.bat

# Hoặc chạy từng lệnh thủ công:
composer install --optimize-autoloader --no-dev
npm install
npm run build
```

## 🌐 Bước 2: Upload lên hosting

### 2.1 Upload files
- Upload toàn bộ thư mục `deploy` lên hosting
- Đặt vào thư mục gốc của domain (thường là `public_html` hoặc `www`)

### 2.2 Cấu hình Document Root
- **Option A**: Trỏ document root về thư mục `public`
- **Option B**: Sử dụng file `.htaccess` đã tạo (tự động redirect)

## ⚙️ Bước 3: Cấu hình hosting

### 3.1 Tạo database
- Tạo MySQL database trên hosting
- Ghi nhớ: tên database, username, password

### 3.2 Cấu hình .env
Chỉnh sửa file `.env` trên hosting:

```env
APP_NAME="Võ Anh Phụng Portfolio"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_CONNECTION=sync
```

### 3.3 Chạy lệnh cài đặt
Trên hosting (qua SSH hoặc Terminal):

```bash
# Tạo application key
php artisan key:generate

# Cache config và routes
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Tạo symbolic link cho storage
php artisan storage:link

# Chạy migration (nếu có database)
php artisan migrate --force
```

## 📁 Bước 4: Upload ảnh

### 4.1 Upload ảnh avatar
- Upload file `VoAnhPhung.jpg` vào `storage/app/public/`

### 4.2 Upload ảnh projects
- Upload các file ảnh project vào `storage/app/public/`:
  - `nlth.png`
  - `php.webp`
  - `favicon.ico`

## 🔧 Bước 5: Cấu hình domain

### 5.1 Trỏ DNS
- Vào trang quản lý domain
- Thêm A record trỏ về IP hosting
- Hoặc CNAME nếu hosting cung cấp domain

### 5.2 SSL Certificate
- Kích hoạt SSL trên hosting
- Hoặc sử dụng Let's Encrypt (free)

## ✅ Bước 6: Kiểm tra

### 6.1 Test website
- Truy cập domain
- Kiểm tra các trang hoạt động
- Kiểm tra ảnh hiển thị

### 6.2 Troubleshooting
Nếu có lỗi, kiểm tra:
- File `.env` đã cấu hình đúng
- Database connection
- File permissions (755 cho thư mục, 644 cho file)
- Error logs trong `storage/logs/laravel.log`

## 🛡️ Bảo mật

### File permissions
```bash
# Thư mục storage và bootstrap/cache phải writable
chmod -R 755 storage
chmod -R 755 bootstrap/cache
```

### Ẩn file nhạy cảm
- File `.env` đã được bảo vệ bởi `.htaccess`
- Thư mục `vendor`, `node_modules` đã được ẩn

## 📞 Hỗ trợ

Nếu gặp vấn đề:
1. Kiểm tra error logs
2. Đảm bảo PHP version >= 8.0
3. Kiểm tra extensions: mbstring, xml, curl, zip, gd, bcmath
4. Liên hệ support hosting nếu cần

---
**🎉 Chúc mừng! Website đã sẵn sàng tại yourdomain.com** 