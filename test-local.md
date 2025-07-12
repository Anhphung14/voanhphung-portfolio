# 🧪 TEST DOCKER BUILD LOCALLY

## 🚀 Build và Test Docker trên máy local

### **Bước 1: Kiểm tra Docker**
```bash
# Kiểm tra Docker đã cài chưa
docker --version
docker-compose --version

# Nếu chưa cài, tải Docker Desktop từ https://docker.com
```

### **Bước 2: Build Docker image**
```bash
# Trong thư mục voanhphung-website
cd voanhphung-website

# Build image với tag
docker build -t voanhphung-portfolio .

# Xem logs build chi tiết
docker build -t voanhphung-portfolio . --progress=plain --no-cache
```

### **Bước 3: Test container**
```bash
# Chạy container
docker run -d -p 8080:80 --name portfolio-test voanhphung-portfolio

# Kiểm tra container status
docker ps

# Xem logs
docker logs portfolio-test

# Truy cập website
# http://localhost:8080
```

### **Bước 4: Test với docker-compose**
```bash
# Chạy với docker-compose
docker-compose up -d

# Xem logs
docker-compose logs -f

# Truy cập website
# http://localhost
```

## 🔍 Debug nếu có lỗi

### **Xem logs chi tiết:**
```bash
# Xem logs container
docker logs portfolio-test

# Xem logs với follow
docker logs -f portfolio-test

# Vào container để debug
docker exec -it portfolio-test bash
```

### **Kiểm tra bên trong container:**
```bash
# Vào container
docker exec -it portfolio-test bash

# Kiểm tra PHP
php --version

# Kiểm tra Composer
composer --version

# Kiểm tra thư mục
ls -la
ls -la storage/
```

### **Test từng bước:**
```bash
# Test PHP extensions
docker exec -it portfolio-test php -m

# Test Composer
docker exec -it portfolio-test composer --version

# Test Laravel
docker exec -it portfolio-test php artisan --version
```

## 🛠️ Fix common issues

### **Issue 1: Permission denied**
```bash
# Fix permissions
docker exec -it portfolio-test chown -R www-data:www-data /var/www/html/storage
docker exec -it portfolio-test chmod -R 775 /var/www/html/storage
```

### **Issue 2: Missing extensions**
```bash
# Vào container và cài thêm extensions
docker exec -it portfolio-test bash
apt-get update
apt-get install -y [extension-name]
```

### **Issue 3: Composer memory limit**
```bash
# Tăng memory limit cho Composer
docker exec -it portfolio-test composer install --no-dev --optimize-autoloader --no-interaction --memory-limit=2G
```

## 📊 Alternative: Test Laravel trước

### **Test Laravel local trước:**
```bash
# Cài đặt dependencies
composer install
npm install
npm run build

# Chạy Laravel
php artisan serve

# Test tại http://localhost:8000
```

### **Nếu Laravel chạy được:**
- Vấn đề là ở Docker configuration
- Cần fix Dockerfile

### **Nếu Laravel không chạy:**
- Vấn đề là ở Laravel setup
- Cần fix Laravel trước

## 🎯 Kết quả mong đợi

### **Nếu build thành công:**
- ✅ Website chạy tại http://localhost:8080
- ✅ Tất cả sections hiển thị
- ✅ Ảnh load được
- ✅ Responsive design

### **Nếu vẫn lỗi:**
- Xem logs chi tiết
- Debug từng bước
- Có thể cần downgrade Laravel

---

**Hãy thử build local trước và cho tôi biết kết quả!** 🚀 