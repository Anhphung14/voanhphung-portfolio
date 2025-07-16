#!/bin/bash

# Deploy script cho Google Cloud Run
set -e

echo "🚀 Bắt đầu deploy lên Google Cloud Run..."

# Variables
PROJECT_ID="voanhphung-portfolio"
SERVICE_NAME="voanhphung-portfolio"
REGION="asia-southeast1"
IMAGE_NAME="gcr.io/$PROJECT_ID/voanhphung-website"

# Colors
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

# Functions
log_info() {
    echo -e "${GREEN}[INFO]${NC} $1"
}

log_warn() {
    echo -e "${YELLOW}[WARN]${NC} $1"
}

log_error() {
    echo -e "${RED}[ERROR]${NC} $1"
}

# Check if gcloud is installed
if ! command -v gcloud &> /dev/null; then
    log_error "Google Cloud CLI chưa được cài đặt. Vui lòng cài đặt trước."
    exit 1
fi

# Check if Docker is running
if ! docker info &> /dev/null; then
    log_error "Docker chưa chạy. Vui lòng khởi động Docker trước."
    exit 1
fi

# Step 1: Setup project
log_info "Setting up Google Cloud project..."
gcloud config set project $PROJECT_ID

# Step 2: Enable required APIs
log_info "Enabling required APIs..."
gcloud services enable run.googleapis.com --quiet
gcloud services enable cloudbuild.googleapis.com --quiet
gcloud services enable containerregistry.googleapis.com --quiet

# Step 3: Configure Docker for GCR
log_info "Configuring Docker for Google Container Registry..."
gcloud auth configure-docker --quiet

# Step 4: Build Docker image
log_info "Building Docker image..."
docker build -t $IMAGE_NAME .

# Step 5: Push image to GCR
log_info "Pushing image to Google Container Registry..."
docker push $IMAGE_NAME

# Step 6: Deploy to Cloud Run
log_info "Deploying to Cloud Run..."
gcloud run deploy $SERVICE_NAME \
    --image $IMAGE_NAME \
    --platform managed \
    --region $REGION \
    --allow-unauthenticated \
    --port 8080 \
    --memory 1Gi \
    --cpu 1 \
    --max-instances 10 \
    --quiet

# Step 7: Get service URL
log_info "Getting service URL..."
SERVICE_URL=$(gcloud run services describe $SERVICE_NAME --region=$REGION --format="value(status.url)")

log_info "✅ Deploy thành công!"
log_info "🌐 Service URL: $SERVICE_URL"

# Step 8: Optional - Setup custom domain
read -p "Bạn có muốn setup custom domain không? (y/n): " -n 1 -r
echo
if [[ $REPLY =~ ^[Yy]$ ]]; then
    read -p "Nhập domain của bạn (ví dụ: yourdomain.com): " DOMAIN
    if [ ! -z "$DOMAIN" ]; then
        log_info "Setting up custom domain: $DOMAIN"
        gcloud run domain-mappings create \
            --service $SERVICE_NAME \
            --domain $DOMAIN \
            --region $REGION \
            --quiet
        log_info "✅ Custom domain đã được setup!"
        log_info "🌐 Domain URL: https://$DOMAIN"
        log_info "📝 Vui lòng cấu hình DNS records:"
        log_info "   Type: CNAME"
        log_info "   Name: @"
        log_info "   Value: ghs.googlehosted.com"
    fi
fi

log_info "🎉 Hoàn thành! Website của bạn đã được deploy thành công." 