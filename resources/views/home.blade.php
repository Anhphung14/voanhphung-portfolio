@extends('layout')
@section('title', 'Home | Võ Anh Phụng')
@section('head')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection
@section('content')
<div class="hero-section section-container" id="home">
    <div class="floating-particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>
    <div class="hero-avatar glow">
        <img src="{{ asset('storage/VoAnhPhung.jpg') }}" alt="Avatar">
    </div>
       <div class="hero-sub hero-desc">
    <i class="fa-solid fa-hand-wave" style="color:#a78bfa;margin-right:8px;"></i>
    Hello! I am <span style="color:#a78bfa;font-weight:600">Võ Anh Phụng</span>
    </div>

    <div class="hero-title">
    A <span id="typed-text" style="color:#a78bfa;"></span>
    </div>

    <div class="hero-desc">
    <i class="fa-solid fa-code" style="color:#a78bfa;margin-right:8px;"></i>
    Passionate about building scalable backend systems and ensuring robust security measures.<br><br>
    </div>

    <div class="hero-stats">
        <div class="stat-item">
            <i class="fa-solid fa-shield-halved"></i>
            <span>Security Focus</span>
        </div>
        <div class="stat-item">
            <i class="fa-solid fa-rocket"></i>
            <span>Fast & Scalable</span>
        </div>
        <div class="stat-item">
            <i class="fa-solid fa-code-branch"></i>
            <span>Clean Code</span>
        </div>
    </div>
</div>
<div class="section-divider"></div>

<div class="section-container" id="work-experience">
    <div class="floating-particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>
    <div class="container">
        <div class="section-title" style="text-align:center;">
            <span class="title-decoration-left"></span>
            Work Experience
        </div>
        <div class="row justify-content-center g-4">
            <div class="col-md-3 col-12">
                <div class="exp-card glow text-center p-5 mb-4 h-100">
                    <div class="fa-icon-wrap mb-3"><i class="fa-solid fa-code fa-2x"></i></div>
                    <div class="fw-bold mb-1">Intern PHP Developer</div>
                    <div class="mb-2">The One Vietnam Co., Ltd</div>
                    <div class="mb-2">07/2024 – 10/2024</div>

                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="exp-card glow text-center p-5 mb-4 h-100">
                    <div class="fa-icon-wrap mb-3"><i class="fa-solid fa-server fa-2x"></i></div>
                    <div class="fw-bold mb-1">PHP Developer</div>
                    <div class="mb-2">Beyond Compass Investment Co., Ltd</div>
                    <div class="mb-2">01/04/2025 – 31/05/2025</div>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="exp-card glow text-center p-5 mb-4 h-100">
                    <div class="fa-icon-wrap mb-3"><i class="fa-solid fa-user-graduate fa-2x"></i></div>
                    <div class="fw-bold mb-1">Student</div>
                    <div class="mb-2 ">PTIT HCM</div>
                    <div class="mb-2">Information Security</div>
                    <div class="mb-2">GPA: 3.34</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-divider"></div>

<div class="section-container" id="achievements">
    <div class="floating-particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>
    <div class="container">
        <div class="section-title" style="text-align:center;">
            <span class="title-decoration-left"></span>
            Achievements
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-12">
                <div class="achievement-timeline">
                    <div class="timeline-period">
                        <div class="period-badge">2021 - 2024</div>
                    </div>
                    <div class="achievement-list">
                        <div class="achievement-item">
                            <div class="achievement-icon">
                                <i class="fa-solid fa-trophy"></i>
                            </div>
                            <div class="achievement-content">
                                <h5>Academic Excellence Scholarship</h5>
                                <p>Semester 1 (Academic Year 2021 - 2022)</p>
                            </div>
                        </div>
                        <div class="achievement-item">
                            <div class="achievement-icon">
                                <i class="fa-solid fa-medal"></i>
                            </div>
                            <div class="achievement-content">
                                <h5>Outstanding Academic Achievement Scholarship</h5>
                                <p>Semester 1 (Academic Year 2022 - 2023)</p>
                            </div>
                        </div>
                        <div class="achievement-item">
                            <div class="achievement-icon">
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="achievement-content">
                                <h5>Excellent Academic Performance Scholarship</h5>
                                <p>Semester 2 (Academic Year 2022 - 2023)</p>
                            </div>
                        </div>
                        <div class="achievement-item">
                            <div class="achievement-icon">
                                <i class="fa-solid fa-award"></i>
                            </div>
                            <div class="achievement-content">
                                <h5>Outstanding Student</h5>
                                <p>Academic Years 2022 - 2024</p>
                            </div>
                        </div>
                        <div class="achievement-item">
                            <div class="achievement-icon">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <div class="achievement-content">
                                <h5>Outstanding Youth Union Officer</h5>
                                <p>Academic Years 2021 - 2022, 2022 - 2023, 2023 - 2024</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-divider"></div>

<div class="section-container" id="projects">
    <div class="floating-particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>
    <div class="container">
        <div class="section-title" style="text-align:center;">
            <span class="title-decoration-left"></span>
            Featured Projects
        </div>

        <!-- Personal Website Floating Card -->
        <div class="project-float-row">
            <div class="project-float-img">
                <img src="{{ asset('storage/nlth.png') }}" alt="Nguyen Le Thanh Hai Website">
            </div>
            <div class="project-float-desc glass">
                <div class="project-float-label">Featured Project</div>
                <div class="project-float-title">Personal Website – M.A. Director & Choreographer</div>
                <div class="project-float-text">
                    Designed and built a personal website to showcase artistic portfolio, news, media gallery, and booking/contact features for Nguyen Le Thanh Hai.
                </div>
                <div class="project-float-tech">
                    <span class="badge">WordPress (CMS)</span>
                    <span class="badge">Portfolio</span>
                    <span class="badge">Booking System</span>
                </div>
                <div class="project-float-link">
                    <a href="https://nguyenlethanhhai.com" target="_blank">
                        <i class="fa-solid fa-external-link-alt"></i> Visit Website
                    </a>
                </div>
            </div>
        </div>

        <!-- Book Buying and Selling Website Floating Card (reverse) -->
        <div class="project-float-row reverse">
            <div class="project-float-img ">
                <img src="{{ asset('storage/php.webp') }}">
            </div>
            <div class="project-float-desc glass">
                <div class="project-float-label">Featured Project</div>
                <div class="project-float-title">Book Buying and Selling Website</div>
                <div class="project-float-text">
                    Led the development of a comprehensive book e-commerce website with inventory and user-role management, integrated AI chatbot, and JWT-secured authentication. Features include book trading, smart filtering/search, email notifications, and comprehensive admin dashboard.
                </div>
                <div class="project-float-tech">
                    <span class="badge">Java (MVC)</span>
                    <span class="badge">SQL Server</span>
                    <span class="badge">JWT</span>
                    <span class="badge">AI Chatbot</span>
                </div>
                <div class="project-float-link">
                    <a href="https://github.com/Anhphung14/BookStore" target="_blank">
                        <i class="fa-brands fa-github"></i> View Project
                    </a>
                </div>
            </div>
        </div>

        <!-- Internal Management System -->
        <div class="project-float-row flex-column flex-md-row align-items-center">
            <div class="project-float-img mb-3 mb-md-0">
                <img src="{{ asset('storage/php.webp') }}" style="max-width:100%;height:auto;">
            </div>
            <div class="project-float-desc glass w-100">
                <div class="fw-bold mb-2" style="font-size:1.3rem;">Internal Management System</div>
                <div class="mb-2 small">07/2023 - 05/2024 | Team size: 3 | Full-Stack Developer</div>
                <div class="mb-3">Built a full-stack internal web application for employee and workflow management. Implemented user authentication, role & permission control, calendar scheduling, and automated email reminders.</div>
                <div class="mb-3">
                    <span class="badge bg-primary me-2">PHP (Laravel)</span>
                    <span class="badge bg-primary me-2">MySQL</span>
                    <span class="badge bg-primary me-2">Blade</span>
                    <span class="badge bg-primary me-2">JavaScript</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-divider"></div>

<div class="section-container" id="tech-stack">
    <div class="floating-particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>
    <div class="container">
        <div class="section-title" style="text-align:center;">
            <span class="title-decoration-left"></span>
            Tech Stack
        </div>
        <div class="d-flex flex-wrap justify-content-center align-items-center gap-4 position-relative" style="min-height:120px;">
            <div class="tech-icon glow"><i class="fa-brands fa-php"></i></div>
            <div class="tech-icon glow"><i class="fa-brands fa-laravel"></i></div>
            <div class="tech-icon glow"><i class="fa-solid fa-database"></i></div>
            <div class="tech-icon glow"><i class="fa-brands fa-html5"></i></div>
            <div class="tech-icon glow"><i class="fa-brands fa-css3-alt"></i></div>
            <div class="tech-icon glow"><i class="fa-brands fa-js"></i></div>
            <div class="tech-icon glow"><i class="fa-brands fa-git-alt"></i></div>
            <div class="tech-icon glow"><i class="fa-brands fa-bootstrap"></i></div>
        </div>
    </div>
</div>
<div class="section-divider"></div>

<div class="section-container" id="contact">
    <div class="floating-particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>
    <div class="container">
        <div class="section-title" style="text-align:center;">
            <span class="title-decoration-left"></span>
            Contact
        </div>
        <div class="contact-block p-4 mx-auto" style="max-width:700px;">
            <div class="contact-header text-center mb-4">
                <h4 style="color:#a78bfa;font-weight:600;margin-bottom:0.5rem;">Võ Anh Phụng</h4>
                <p style="color:#d1c4e9;font-size:1rem;margin:0;">Backend Developer & Information Security Student</p>
            </div>

            <div class="contact-info-grid">
                <div class="contact-info-item">
                    <div class="contact-info-icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="contact-info-content">
                        <h6>Email</h6>
                        <a href="mailto:pphung1472@gmail.com">pphung1472@gmail.com</a>
                    </div>
                </div>

                <div class="contact-info-item">
                    <div class="contact-info-icon">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <div class="contact-info-content">
                        <h6>Education</h6>
                        <span>PTIT HCM - Information Security</span>
                    </div>
                </div>

                <div class="contact-info-item">
                    <div class="contact-info-icon">
                        <i class="fa-solid fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-info-content">
                        <h6>Location</h6>
                        <span>Ho Chi Minh City, Vietnam</span>
                    </div>
                </div>

                <div class="contact-info-item">
                    <div class="contact-info-icon">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <div class="contact-info-content">
                        <h6>Specialization</h6>
                        <span>Backend Development & Security</span>
                    </div>
                </div>
            </div>

            <div class="contact-social text-center mt-4">
                <p style="color:#a78bfa;font-weight:500;margin-bottom:1rem;">Let's Connect</p>
                <div class="social-links">
                    <a href="https://github.com/Anhphung14" target="_blank" class="social-link">
                        <i class="fa-brands fa-github"></i>
                        <span>GitHub</span>
                    </a>
                    <a href="mailto:pphung1472@gmail.com" class="social-link">
                        <i class="fa-solid fa-envelope"></i>
                        <span>Email</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
  new Typed('#typed-text', {
    strings: [
      'Fresher Backend Developer',
    ],
    typeSpeed: 50,
    backSpeed: 30,
    backDelay: 2000,
    loop: true,
    showCursor: true,
    cursorChar: '|',
    autoInsertCss: true
  });
</script>
@endsection
