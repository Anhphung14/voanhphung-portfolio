# 🎯 Võ Anh Phụng - Portfolio Website

Personal portfolio website built with Laravel, showcasing my work experience, projects, and achievements.

## 🚀 Features

- **Modern Design**: Beautiful UI with purple gradient theme
- **Responsive**: Works perfectly on all devices
- **Smooth Animations**: CSS animations and scroll effects
- **Professional Sections**: Home, Experience, Achievements, Projects, Tech Stack, Contact
- **Docker Ready**: Easy deployment with Docker

## 🛠️ Tech Stack

- **Backend**: Laravel 10, PHP 8.2
- **Frontend**: HTML5, CSS3, JavaScript, Bootstrap 5
- **Database**: SQLite (for simplicity)
- **Deployment**: Docker, Railway
- **Icons**: Font Awesome 6

## 📋 Sections

1. **Home**: Hero section with avatar and typing animation
2. **Work Experience**: Professional experience timeline
3. **Achievements**: Academic and professional achievements
4. **Projects**: Featured projects with images and descriptions
5. **Tech Stack**: Technology icons with hover effects
6. **Contact**: Professional contact information

## 🚀 Quick Start

### Local Development
```bash
# Clone repository
git clone https://github.com/yourusername/voanhphung-portfolio.git
cd voanhphung-portfolio

# Install dependencies
composer install
npm install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Run migrations
php artisan migrate

# Build assets
npm run build

# Start development server
php artisan serve
```

### Docker Development
```bash
# Build and run with Docker
docker-compose up -d

# Website will be available at http://localhost
```

## 🌐 Deployment

### Railway (Recommended)
1. Push code to GitHub
2. Connect repository to Railway
3. Railway will auto-detect Dockerfile and deploy
4. Add custom domain in Railway settings

### VPS Deployment
1. Upload code to VPS
2. Install Docker
3. Run `docker-compose up -d`
4. Configure domain and SSL

## 📁 Project Structure

```
voanhphung-website/
├── app/                    # Laravel application logic
├── resources/
│   ├── views/             # Blade templates
│   │   ├── layout.blade.php
│   │   └── home.blade.php
│   ├── css/               # Stylesheets
│   └── js/                # JavaScript files
├── public/                # Public assets
├── storage/               # File storage
├── docker/                # Docker configuration
├── Dockerfile             # Docker image definition
└── docker-compose.yml     # Docker services
```

## 🎨 Design Features

- **Purple Gradient Theme**: Modern and professional look
- **Floating Particles**: Animated background elements
- **Section Dividers**: Visual separation between sections
- **Hover Effects**: Interactive elements with smooth transitions
- **Scroll Animations**: Reveal animations on scroll
- **Responsive Grid**: Adapts to all screen sizes

## 📱 Responsive Design

- **Desktop**: Full layout with all features
- **Tablet**: Optimized for medium screens
- **Mobile**: Mobile-first design with touch-friendly elements

## 🔧 Configuration

### Environment Variables
```env
APP_NAME="Võ Anh Phụng Portfolio"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com
DB_CONNECTION=sqlite
```

### Customization
- Update personal information in `resources/views/home.blade.php`
- Modify colors in CSS variables
- Add/remove sections as needed
- Update images in `storage/app/public/`

## 📞 Contact

- **Email**: pphung1472@gmail.com
- **GitHub**: [Anhphung14](https://github.com/Anhphung14)
- **Portfolio**: [yourdomain.com](https://yourdomain.com)

## 📄 License

This project is open source and available under the [MIT License](LICENSE).

---

**Built with ❤️ by Võ Anh Phụng**
