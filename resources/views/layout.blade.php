<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Võ Anh Phụng | Portfolio')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/favicon.ico') }}">
    <style>
        body {
            background: radial-gradient(ellipse at top, #2d1457 0%, #12002f 100%);
            color: #fff;
            font-family: 'Inter', Arial, sans-serif;
            min-height: 100vh;
        }
        .navbar {
            background: rgba(18,0,47,0.98);
            box-shadow: 0 2px 16px 0 #7c3aed33;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            letter-spacing: 2px;
            color: #fff !important;
        }
        .nav-link {
            color: #fff !important;
            font-weight: 500;
            margin-left: 1.5rem;
            transition: color 0.2s;
        }
        .nav-link:hover, .nav-link.active {
            color: #a78bfa !important;
        }
        .scroll-link {
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .scroll-link:hover {
            transform: translateY(-2px);
        }
        html {
            scroll-behavior: smooth;
        }
        .glow {
            box-shadow: 0 0 32px 8px #a78bfa44, 0 0 8px 2px #7c3aed99;
        }
        .section-title {
            font-size: 2rem;
            font-weight: 700;
            color: #fff;
            margin-bottom: 2rem;
            letter-spacing: -1px;
        }
        a, a:visited { color: #a78bfa; }
        a:hover { color: #fff; }
        .footer {
            background: transparent;
            color: #a78bfa;
            text-align: center;
            padding: 32px 0 16px 0;
            font-size: 1rem;
        }

        /* Section spacing and decorative elements */
        .section-container {
            padding: 80px 0;
            position: relative;
            margin: 40px 0;
        }

        .section-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, transparent, #a78bfa, transparent);
            border-radius: 2px;
            opacity: 0.6;
        }

        .section-container::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, transparent, #a78bfa, transparent);
            border-radius: 2px;
            opacity: 0.6;
        }

        /* Decorative corner elements */
        .section-container .container {
            position: relative;
        }

        .section-container .container::before {
            content: '';
            position: absolute;
            top: -20px;
            left: -20px;
            width: 40px;
            height: 40px;
            border-top: 2px solid #a78bfa;
            border-left: 2px solid #a78bfa;
            border-radius: 8px 0 0 0;
            opacity: 0.4;
        }

        .section-container .container::after {
            content: '';
            position: absolute;
            bottom: -20px;
            right: -20px;
            width: 40px;
            height: 40px;
            border-bottom: 2px solid #a78bfa;
            border-right: 2px solid #a78bfa;
            border-radius: 0 0 8px 0;
            opacity: 0.4;
        }

        /* Floating particles effect */
        .floating-particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
            z-index: 1;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: #a78bfa;
            border-radius: 50%;
            opacity: 0.3;
            animation: float 6s ease-in-out infinite;
        }

        .particle:nth-child(1) {
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .particle:nth-child(2) {
            top: 60%;
            left: 80%;
            animation-delay: 2s;
        }

        .particle:nth-child(3) {
            top: 80%;
            left: 20%;
            animation-delay: 4s;
        }

        .particle:nth-child(4) {
            top: 40%;
            left: 90%;
            animation-delay: 1s;
        }

        .particle:nth-child(5) {
            top: 10%;
            left: 70%;
            animation-delay: 3s;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
                opacity: 0.3;
            }
            50% {
                transform: translateY(-20px) rotate(180deg);
                opacity: 0.6;
            }
        }

        /* Section divider with glow effect */
        .section-divider {
            height: 2px;
            background: linear-gradient(90deg, transparent, #a78bfa, transparent);
            margin: 60px auto;
            position: relative;
            max-width: 200px;
            box-shadow: 0 0 20px rgba(167, 139, 250, 0.5);
        }

        .section-divider::before {
            content: '';
            position: absolute;
            top: -2px;
            left: 50%;
            transform: translateX(-50%);
            width: 6px;
            height: 6px;
            background: #a78bfa;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(167, 139, 250, 0.8);
        }

        /* Enhanced section titles */
        .section-title {
            position: relative;
            display: inline-block;
            padding: 0 20px;
        }

        .section-title::before {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: linear-gradient(90deg, transparent, #a78bfa, transparent);
            border-radius: 2px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            top: 50%;
            right: -30px;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            background: #a78bfa;
            border-radius: 50%;
            opacity: 0.6;
            animation: pulse 2s ease-in-out infinite;
        }

        .section-title .title-decoration-left {
            position: absolute;
            top: 50%;
            left: -30px;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            background: #a78bfa;
            border-radius: 50%;
            opacity: 0.6;
            animation: pulse 2s ease-in-out infinite reverse;
        }

        @keyframes pulse {
            0%, 100% {
                transform: translateY(-50%) scale(1);
                opacity: 0.6;
            }
            50% {
                transform: translateY(-50%) scale(1.2);
                opacity: 1;
            }
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .section-container {
                padding: 60px 0;
                margin: 30px 0;
            }

            .section-container .container::before,
            .section-container .container::after {
                display: none;
            }

            .particle {
                display: none;
            }
        }

        /* Additional decorative elements */
        .section-container:nth-child(even) .floating-particles .particle {
            animation-direction: reverse;
        }

        /* Glowing border effect for sections */
        .section-container {
            position: relative;
            overflow: hidden;
        }

        .section-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, #a78bfa, transparent);
            animation: borderGlow 3s ease-in-out infinite;
        }

        @keyframes borderGlow {
            0%, 100% { opacity: 0.3; }
            50% { opacity: 0.8; }
        }

        /* Scroll reveal animation */
        .section-container {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }

        .section-container.revealed {
            opacity: 1;
            transform: translateY(0);
        }

        /* Stagger animation for particles */
        .floating-particles .particle:nth-child(1) { animation-delay: 0s; }
        .floating-particles .particle:nth-child(2) { animation-delay: 1s; }
        .floating-particles .particle:nth-child(3) { animation-delay: 2s; }
        .floating-particles .particle:nth-child(4) { animation-delay: 3s; }
        .floating-particles .particle:nth-child(5) { animation-delay: 4s; }
    </style>
    @yield('head')
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link scroll-link" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link scroll-link" href="#work-experience">Experience</a></li>
        <li class="nav-item"><a class="nav-link scroll-link" href="#achievements">Achievements</a></li>
        <li class="nav-item"><a class="nav-link scroll-link" href="#projects">Projects</a></li>
        <li class="nav-item"><a class="nav-link scroll-link" href="#tech-stack">Tech Stack</a></li>
        <li class="nav-item"><a class="nav-link scroll-link" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid px-0" style="min-height:80vh;">
    @yield('content')
</div>
<footer class="footer">
    <div>© {{ date('Y') }} Võ Anh Phụng.</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Smooth scrolling for navigation links
document.addEventListener('DOMContentLoaded', function() {
    const scrollLinks = document.querySelectorAll('.scroll-link');

    scrollLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);

            if (targetSection) {
                const offsetTop = targetSection.offsetTop - 80; // Account for fixed navbar
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Update active nav link based on scroll position
    window.addEventListener('scroll', function() {
        const sections = document.querySelectorAll('section[id], div[id]');
        const scrollPos = window.scrollY + 100;

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute('id');

            if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
                document.querySelectorAll('.nav-link').forEach(link => {
                    link.classList.remove('active');
                });

                const activeLink = document.querySelector(`[href="#${sectionId}"]`);
                if (activeLink) {
                    activeLink.classList.add('active');
                }
            }
        });

        // Scroll reveal animation
        const sectionContainers = document.querySelectorAll('.section-container');
        sectionContainers.forEach(container => {
            const containerTop = container.offsetTop;
            const containerHeight = container.offsetHeight;
            const scrollPosition = window.scrollY + window.innerHeight;

            if (scrollPosition > containerTop + containerHeight * 0.3) {
                container.classList.add('revealed');
            }
        });
    });

    // Initial reveal for sections already in view
    const sectionContainers = document.querySelectorAll('.section-container');
    sectionContainers.forEach(container => {
        const containerTop = container.offsetTop;
        const containerHeight = container.offsetHeight;
        const scrollPosition = window.scrollY + window.innerHeight;

        if (scrollPosition > containerTop + containerHeight * 0.3) {
            container.classList.add('revealed');
        }
    });
});
</script>
@yield('scripts')
</body>
</html>
