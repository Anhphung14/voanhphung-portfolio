# 🐳 DOCKER DEPLOYMENT GUIDE

## 🚀 Deploy với Docker - Không cần hosting truyền thống!

### **Ưu điểm:**
- ✅ Không cần hosting riêng
- ✅ Deploy lên bất kỳ server nào (VPS, Cloud, Local)
- ✅ Dễ dàng scale và maintain
- ✅ Consistent environment
- ✅ Có thể deploy lên nhiều platform

---

## 📋 **Các lựa chọn deploy:**

### **1. VPS (DigitalOcean, Vultr, Linode)**
- Giá: $5-10/tháng
- Full control
- Trỏ domain trực tiếp

### **2. Cloud Platforms**
- **Railway**: Free tier, auto-deploy
- **Render**: Free tier, easy setup
- **Heroku**: Paid, professional
- **Google Cloud Run**: Pay per use

### **3. Local Server**
- Raspberry Pi
- Home server
- Company server

---

## 🛠️ **Bước 1: Chuẩn bị**

### **1.1 Cài đặt Docker**
```bash
# Windows
# Tải Docker Desktop từ https://docker.com

# Linux
curl -fsSL https://get.docker.com -o get-docker.sh
sudo sh get-docker.sh
```

### **1.2 Build Docker image**
```bash
# Trong thư mục project
docker build -t voanhphung-portfolio .
```

---

## 🚀 **Bước 2: Deploy lên VPS**

### **2.1 Tạo VPS (DigitalOcean)**
```bash
# Kết nối SSH
ssh root@your_server_ip

# Cài đặt Docker
curl -fsSL https://get.docker.com -o get-docker.sh
sudo sh get-docker.sh

# Cài đặt Docker Compose
sudo curl -L "https://github.com/docker/compose/releases/download/v2.20.0/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
sudo chmod +x /usr/local/bin/docker-compose
```

### **2.2 Upload code**
```bash
# Tạo thư mục project
mkdir -p /opt/voanhphung-portfolio
cd /opt/voanhphung-portfolio

# Upload files (sử dụng SCP hoặc Git)
# scp -r . root@your_server_ip:/opt/voanhphung-portfolio/
```

### **2.3 Chạy Docker Compose**
```bash
# Build và start services
docker-compose up -d

# Kiểm tra logs
docker-compose logs -f
```

### **2.4 Cấu hình domain**
```bash
# Trỏ A record về IP server
# yourdomain.com -> your_server_ip
```

---

## ☁️ **Bước 3: Deploy lên Cloud Platforms**

### **3.1 Railway (Khuyến nghị - Free)**
```bash
# 1. Tạo account tại railway.app
# 2. Connect GitHub repository
# 3. Railway sẽ auto-detect Dockerfile
# 4. Deploy tự động
```

### **3.2 Render**
```bash
# 1. Tạo account tại render.com
# 2. New Web Service
# 3. Connect Git repository
# 4. Build Command: docker build -t app .
# 5. Start Command: docker run -p $PORT:80 app
```

### **3.3 Google Cloud Run**
```bash
# 1. Enable Cloud Run API
# 2. Build và push image
gcloud builds submit --tag gcr.io/PROJECT_ID/voanhphung-portfolio
gcloud run deploy --image gcr.io/PROJECT_ID/voanhphung-portfolio --platform managed
```

---

## 🔧 **Bước 4: Cấu hình SSL**

### **4.1 Let's Encrypt với Docker**
```bash
# Thêm service vào docker-compose.yml
certbot:
  image: certbot/certbot
  volumes:
    - ./certbot/conf:/etc/letsencrypt
    - ./certbot/www:/var/www/certbot
  command: certonly --webroot -w /var/www/certbot --force-renewal --email your@email.com -d yourdomain.com --agree-tos
```

### **4.2 Nginx với SSL**
```nginx
server {
    listen 443 ssl;
    server_name yourdomain.com;
    
    ssl_certificate /etc/letsencrypt/live/yourdomain.com/fullchain.pem;
    ssl_certificate_key /etc/letsencrypt/live/yourdomain.com/privkey.pem;
    
    # ... rest of config
}
```

---

## 📊 **Bước 5: Monitoring & Maintenance**

### **5.1 Health Check**
```bash
# Kiểm tra container status
docker ps

# Kiểm tra logs
docker-compose logs -f app

# Restart services
docker-compose restart
```

### **5.2 Backup**
```bash
# Backup database
docker exec voanhphung-portfolio sqlite3 /var/www/html/database/database.sqlite ".backup /backup/backup.sqlite"

# Backup files
docker cp voanhphung-portfolio:/var/www/html/storage ./backup/
```

### **5.3 Update**
```bash
# Pull latest code
git pull origin main

# Rebuild và restart
docker-compose down
docker-compose build --no-cache
docker-compose up -d
```

---

## 🎯 **Quick Deploy Commands**

### **Local Development**
```bash
docker-compose up -d
# Website sẽ chạy tại http://localhost
```

### **Production Deploy**
```bash
# 1. Build image
docker build -t voanhphung-portfolio .

# 2. Run container
docker run -d -p 80:80 --name portfolio voanhphung-portfolio

# 3. Trỏ domain về server IP
```

---

## 🔍 **Troubleshooting**

### **Container không start**
```bash
# Kiểm tra logs
docker logs voanhphung-portfolio

# Kiểm tra ports
docker port voanhphung-portfolio

# Restart container
docker restart voanhphung-portfolio
```

### **Permission issues**
```bash
# Fix permissions
docker exec voanhphung-portfolio chown -R www-data:www-data /var/www/html/storage
docker exec voanhphung-portfolio chmod -R 775 /var/www/html/storage
```

### **Database issues**
```bash
# Recreate database
docker exec voanhphung-portfolio php artisan migrate:fresh --force
```

---

## 🎉 **Kết quả**

Sau khi deploy thành công:
- ✅ Website chạy trên domain của bạn
- ✅ SSL certificate tự động
- ✅ Auto-restart khi server reboot
- ✅ Easy backup và restore
- ✅ Scalable và maintainable

**Bạn muốn deploy lên platform nào? Tôi sẽ hướng dẫn chi tiết hơn!** 