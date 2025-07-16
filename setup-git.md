# 🚀 BƯỚC 1: SETUP GIT VÀ PUSH LÊN GITHUB

## 📋 Chuẩn bị

### 1.1 Cài đặt Git (nếu chưa có)
```bash
# Windows: Tải từ https://git-scm.com/
# Hoặc dùng winget
winget install Git.Git

# Kiểm tra cài đặt
git --version
```

### 1.2 Tạo GitHub account (nếu chưa có)
- Truy cập https://github.com
- Click "Sign up" và tạo account

## 🔧 Setup Git

### 1.3 Cấu hình Git
```bash
# Cấu hình user
git config --global user.name "Võ Anh Phụng"
git config --global user.email "pphung1472@gmail.com"

# Kiểm tra cấu hình
git config --list
```

### 1.4 Khởi tạo repository
```bash
# Trong thư mục voanhphung-website
cd voanhphung-website

# Khởi tạo Git repository
git init

# Thêm tất cả files
git add .

# Commit đầu tiên
git commit -m "Initial commit: Portfolio website with Docker setup"
```

## 📤 Push lên GitHub

### 1.5 Tạo repository trên GitHub
1. Truy cập https://github.com
2. Click "New repository"
3. Đặt tên: `voanhphung-portfolio`
4. Chọn "Public"
5. **KHÔNG** tạo README, .gitignore, license
6. Click "Create repository"

### 1.6 Push code
```bash
# Thêm remote origin
git remote add origin https://github.com/YOUR_USERNAME/voanhphung-portfolio.git

# Push lên GitHub
git branch -M main
git push -u origin main
```

## ✅ Kiểm tra

### 1.7 Verify repository
- Truy cập https://github.com/YOUR_USERNAME/voanhphung-portfolio
- Kiểm tra tất cả files đã được upload
- Đảm bảo có các file quan trọng:
  - `Dockerfile`
  - `docker-compose.yml`
  - `README.md`
  - `resources/views/home.blade.php`

## 🔄 Cập nhật code (nếu cần)

```bash
# Thêm thay đổi
git add .

# Commit
git commit -m "Update: Add new features or fixes"

# Push
git push origin main
```

## 📝 Lưu ý quan trọng

### Files đã được ignore (.gitignore):
- `.env` - File cấu hình nhạy cảm
- `node_modules/` - Dependencies
- `vendor/` - PHP dependencies
- `storage/logs/` - Log files

### Files quan trọng đã được include:
- ✅ `Dockerfile` - Docker configuration
- ✅ `docker-compose.yml` - Docker services
- ✅ `docker/` - Docker configs
- ✅ `resources/views/` - Laravel views
- ✅ `public/` - Public assets
- ✅ `README.md` - Project documentation

---

## 🎯 Bước tiếp theo

Sau khi push code lên GitHub thành công, chúng ta sẽ:
1. **Bước 2**: Tạo Railway account và connect repository
2. **Bước 3**: Deploy tự động trên Railway
3. **Bước 4**: Cấu hình custom domain

**Hãy thực hiện các bước trên và cho tôi biết khi hoàn thành!** 🚀 

## **1. Map Custom Domain trên Cloud Run**

Sau khi deploy thành công, chạy lệnh này:

```bash
gcloud run domain-mappings create \
  --service voanhphung-portfolio \
  --domain yourdomain.com \
  --region asia-southeast1
```

Thay `yourdomain.com` bằng domain thực của bạn.

## **2. Cấu hình DNS Records**

Vào nhà cung cấp domain của bạn (như Namecheap, GoDaddy, etc.) và thêm DNS records:

### **Nếu dùng domain gốc (yourdomain.com):**
- **Type:** CNAME
- **Name:** @ (hoặc để trống)
- **Value:** ghs.googlehosted.com

### **Nếu dùng subdomain (www.yourdomain.com):**
- **Type:** CNAME  
- **Name:** www
- **Value:** ghs.googlehosted.com

## **3. SSL Certificate (Tự động)**

Google Cloud Run sẽ tự động cung cấp SSL certificate cho domain của bạn.

## **4. Kiểm tra trạng thái**

```bash
<code_block_to_apply_changes_from>
```

## **Ví dụ cụ thể:**

Nếu domain của bạn là `voanhphung.com`:

1. **Map domain:**
   ```bash
   gcloud run domain-mappings create --service voanhphung-portfolio --domain voanhphung.com --region asia-southeast1
   ```

2. **DNS records:**
   - Type: CNAME
   - Name: @
   - Value: ghs.googlehosted.com

**Domain của bạn là gì?** Tôi sẽ hướng dẫn cụ thể hơn!