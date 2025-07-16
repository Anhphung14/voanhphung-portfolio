# Deploy Laravel lên Google Cloud Run

## Prerequisites
- Google Cloud account
- Google Cloud CLI (gcloud) đã cài đặt
- Docker đã cài đặt

## Bước 1: Setup Google Cloud Project

```bash
# Login vào Google Cloud
gcloud auth login

# Tạo project mới (hoặc chọn project có sẵn)
gcloud projects create voanhphung-portfolio --name="Vo Anh Phung Portfolio"

# Set project
gcloud config set project voanhphung-portfolio

# Enable required APIs
gcloud services enable run.googleapis.com
gcloud services enable cloudbuild.googleapis.com
gcloud services enable containerregistry.googleapis.com
```

## Bước 2: Build và Push Docker Image

```bash
# Build Docker image
docker build -t gcr.io/voanhphung-portfolio/voanhphung-website .

# Push lên Google Container Registry
docker push gcr.io/voanhphung-portfolio/voanhphung-website
```

## Bước 3: Deploy lên Cloud Run

```bash
# Deploy service
gcloud run deploy voanhphung-portfolio \
  --image gcr.io/voanhphung-portfolio/voanhphung-website \
  --platform managed \
  --region asia-southeast1 \
  --allow-unauthenticated \
  --port 8080 \
  --memory 1Gi \
  --cpu 1 \
  --max-instances 10
```

## Bước 4: Setup Custom Domain

```bash
# Map custom domain
gcloud run domain-mappings create \
  --service voanhphung-portfolio \
  --domain yourdomain.com \
  --region asia-southeast1
```

## Bước 5: Cấu hình DNS

Thêm DNS records:
- Type: CNAME
- Name: @
- Value: ghs.googlehosted.com

## Bước 6: Setup SSL (Tự động)

Cloud Run tự động cung cấp SSL certificate cho custom domain.

## Environment Variables (nếu cần)

```bash
gcloud run services update voanhphung-portfolio \
  --update-env-vars APP_URL=https://yourdomain.com \
  --region asia-southeast1
```

## Monitoring và Logs

```bash
# Xem logs
gcloud logs tail --service=voanhphung-portfolio

# Xem metrics
gcloud run services describe voanhphung-portfolio --region asia-southeast1
```

## Chi phí ước tính

- **Free tier**: 2 triệu requests/tháng
- **Sau đó**: $0.40/million requests
- **Memory**: $0.00002400/vCPU-second
- **CPU**: $0.00002400/vCPU-second

## Troubleshooting

### Lỗi thường gặp:
1. **Port không đúng**: Đảm bảo app listen trên port 8080
2. **Memory limit**: Tăng memory nếu cần
3. **Timeout**: Tăng timeout nếu cần

### Commands hữu ích:
```bash
# Xem service status
gcloud run services list

# Update service
gcloud run services update voanhphung-portfolio --image gcr.io/voanhphung-portfolio/voanhphung-website

# Delete service
gcloud run services delete voanhphung-portfolio
``` 