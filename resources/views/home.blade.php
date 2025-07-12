@extends('layout')
@section('title', 'Home | Võ Anh Phụng')
@section('head')
<style>
.hero-section {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
  min-height: 70vh;
  padding-top: 64px;
  padding-bottom: 100px;
  margin-bottom: 50px;
}
.hero-avatar {
  width: 140px;
  height: 140px;
  border-radius: 50%;
  box-shadow:
    0 0 60px 12px #a78bfa66,
    0 0 20px 4px #7c3aedcc,
    0 0 40px 8px rgba(167, 139, 250, 0.3),
    inset 0 0 20px rgba(167, 139, 250, 0.1);
  margin-bottom: 32px;
  background: linear-gradient(135deg, #2d1457 0%, #1a1033 100%);
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  position: relative;
  border: 3px solid rgba(167, 139, 250, 0.3);
  transition: all 0.3s ease;
  animation: avatarGlow 3s ease-in-out infinite alternate;
}

.hero-avatar::before {
  content: '';
  position: absolute;
  top: -2px;
  left: -2px;
  right: -2px;
  bottom: -2px;
  background: linear-gradient(45deg, #a78bfa, #7c3aed, #a78bfa);
  border-radius: 50%;
  z-index: -1;
  animation: borderRotate 4s linear infinite;
}

.hero-avatar img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 50%;
  transition: transform 0.3s ease;
}

.hero-avatar:hover {
  transform: scale(1.05);
  box-shadow:
    0 0 80px 20px #a78bfa88,
    0 0 30px 8px #7c3aedff,
    0 0 60px 12px rgba(167, 139, 250, 0.4),
    inset 0 0 30px rgba(167, 139, 250, 0.2);
}

.hero-avatar:hover img {
  transform: scale(1.1);
}

@keyframes avatarGlow {
  0% {
    box-shadow:
      0 0 60px 12px #a78bfa66,
      0 0 20px 4px #7c3aedcc,
      0 0 40px 8px rgba(167, 139, 250, 0.3),
      inset 0 0 20px rgba(167, 139, 250, 0.1);
  }
  100% {
    box-shadow:
      0 0 80px 16px #a78bfa88,
      0 0 30px 6px #7c3aedff,
      0 0 50px 10px rgba(167, 139, 250, 0.4),
      inset 0 0 25px rgba(167, 139, 250, 0.15);
  }
}

@keyframes borderRotate {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
.hero-title {
  font-size: 2.5rem;
  font-weight: 700;
  color: #fff;
  letter-spacing: -1px;
  text-align: center;
}
.hero-sub {
  font-size: 1.1rem;
  color: #a78bfa;
  margin-bottom: 1.5rem;
  text-align: center;
}
.hero-desc {
  color: #d1c4e9;
  font-size: 1.1rem;
  max-width: 540px;
  text-align: center;
  margin-bottom: 2.5rem;
}
@media (max-width: 600px) {
  .hero-title { font-size: 1.3rem; }
  .hero-avatar {
    width: 100px;
    height: 100px;
    margin-bottom: 24px;
  }
  .hero-avatar::before {
    top: -1px;
    left: -1px;
    right: -1px;
    bottom: -1px;
  }
}

/* Typing animation styles */
.typed-cursor {
  color: #a78bfa;
  font-weight: 700;
  animation: blink 1s infinite;
}

@keyframes blink {
  0%, 50% { opacity: 1; }
  51%, 100% { opacity: 0; }
}

#typed-text {
  min-height: 3rem;
  display: inline-block;
}

/* Hero stats styling */
.hero-stats {
  display: flex;
  gap: 2rem;
  margin-top: 2rem;
  flex-wrap: wrap;
  justify-content: center;
}

.stat-item {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  padding: 0.75rem 1.5rem;
  background: linear-gradient(135deg, rgba(167, 139, 250, 0.1) 0%, rgba(124, 58, 237, 0.1) 100%);
  border: 1px solid rgba(167, 139, 250, 0.2);
  border-radius: 25px;
  color: #a78bfa;
  font-size: 0.9rem;
  font-weight: 500;
  transition: all 0.3s ease;
  backdrop-filter: blur(10px);
}

.stat-item:hover {
  transform: translateY(-2px);
  background: linear-gradient(135deg, rgba(167, 139, 250, 0.2) 0%, rgba(124, 58, 237, 0.2) 100%);
  border-color: rgba(167, 139, 250, 0.4);
  box-shadow: 0 4px 20px rgba(167, 139, 250, 0.3);
}

.stat-item i {
  font-size: 1.1rem;
  color: #a78bfa;
  transition: transform 0.3s ease;
}

.stat-item:hover i {
  transform: scale(1.1);
}

@media (max-width: 768px) {
  .hero-stats {
    gap: 1rem;
    flex-direction: column;
    align-items: center;
  }

  .stat-item {
    padding: 0.5rem 1rem;
    font-size: 0.85rem;
  }
}
.exp-card {
    background: linear-gradient(135deg, #2d1457 60%, #7c3aed22 100%);
    border-radius: 18px;
    box-shadow: 0 0 32px 8px #a78bfa33, 0 0 8px 2px #7c3aed55;
    border: 1.5px solid #a78bfa33;
    transition: transform 0.18s, box-shadow 0.18s;
}
.exp-card:hover {
    transform: translateY(-6px) scale(1.04);
    box-shadow: 0 0 48px 16px #a78bfa77, 0 0 16px 4px #7c3aedcc;
}
.tech-icon {
    font-size: 2.2rem;
    color: #a78bfa;
    background: #1a1033;
    border-radius: 50%;
    width: 56px;
    height: 56px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 0 24px 4px #a78bfa33, 0 0 8px 2px #7c3aed55;
    margin: 0 8px;
    transition: transform 0.18s, box-shadow 0.18s;
    border: 1.5px solid #a78bfa33;
    position: relative;
}
.tech-icon:hover {
    transform: scale(1.13) rotate(-6deg);
    box-shadow: 0 0 48px 12px #a78bfa77, 0 0 16px 4px #7c3aedcc;
    color: #fff;
}
.project-img-wrap {
    background: radial-gradient(ellipse at center, #a78bfa33 0%, #12002f 100%);
    border-radius: 24px;
    padding: 16px;
    box-shadow: 0 0 48px 8px #a78bfa55, 0 0 8px 2px #7c3aed99;
    display: flex;
    align-items: center;
    justify-content: center;
}
.project-card {
    background: linear-gradient(135deg, #2d1457 60%, #7c3aed22 100%);
    border-radius: 18px;
    box-shadow: 0 0 32px 8px #a78bfa33, 0 0 8px 2px #7c3aed55;
    border: 1.5px solid #a78bfa33;
    transition: transform 0.18s, box-shadow 0.18s;
}
.project-card:hover {
    transform: translateY(-6px) scale(1.04);
    box-shadow: 0 0 48px 16px #a78bfa77, 0 0 16px 4px #7c3aedcc;
}
.contact-block {
    background: linear-gradient(135deg, #2d1457 60%, #7c3aed22 100%);
    border-radius: 18px;
    box-shadow: 0 0 32px 8px #a78bfa33, 0 0 8px 2px #7c3aed55;
    border: 1.5px solid #a78bfa33;
    color: #fff;
    text-align: left;
}
.contact-icon {
    color: #a78bfa;
    font-size: 1.6rem;
    transition: color 0.18s, transform 0.18s;
}
.contact-icon:hover {
    color: #fff;
    transform: scale(1.18) rotate(-8deg);
}
.fa-icon-wrap {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 64px;
    height: 64px;
    border-radius: 50%;
    background: #1a1033;
    box-shadow: 0 0 24px 4px #a78bfa33, 0 0 8px 2px #7c3aed55;
    margin: 0 auto 12px auto;
    color: #a78bfa;
    transition: background 0.18s, color 0.18s;
}
.exp-card:hover .fa-icon-wrap {
    background: #a78bfa;
    color: #fff;
}
.fa-icon-project {
    color: #a78bfa;
    text-shadow: 0 0 32px #a78bfa77, 0 0 8px #7c3aed99;
    transition: color 0.18s, text-shadow 0.18s;
}
.project-img-wrap:hover .fa-icon-project {
    color: #fff;
    text-shadow: 0 0 48px #a78bfa, 0 0 16px #7c3aed;
}

/* Project badges styling */
.badge {
    background: linear-gradient(135deg, #a78bfa 0%, #7c3aed 100%) !important;
    border: 1px solid rgba(167, 139, 250, 0.3);
    font-size: 0.75rem;
    font-weight: 500;
    padding: 0.4rem 0.8rem;
    transition: all 0.3s ease;
}

.badge:hover {
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(167, 139, 250, 0.3);
}

/* Project image styling */
.project-image-container {
    position: relative;
    width: 100%;
    height: 100%;
    border-radius: 16px;
    overflow: hidden;
    transition: all 0.4s ease;
}

.project-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 16px;
    transition: all 0.4s ease;
    filter: brightness(0.9) contrast(1.1);
}

.project-image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(167, 139, 250, 0.8) 0%, rgba(124, 58, 237, 0.8) 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: all 0.4s ease;
    border-radius: 16px;
}

.project-image-overlay i {
    color: #fff;
    transform: scale(0.8);
    transition: all 0.4s ease;
}

.project-image-container:hover {
    transform: scale(1.02);
    box-shadow: 0 8px 32px rgba(167, 139, 250, 0.4);
}

.project-image-container:hover .project-image {
    transform: scale(1.1);
    filter: brightness(1.1) contrast(1.2);
}

.project-image-container:hover .project-image-overlay {
    opacity: 1;
}

.project-image-container:hover .project-image-overlay i {
    transform: scale(1.2);
}

/* Add clickable effect */
.project-image-container {
    cursor: pointer;
}

.project-image-container:active {
    transform: scale(0.98);
}

@media (max-width: 768px) {
    .project-image-container {
        height: 200px;
    }

    .project-image-overlay i {
        font-size: 1.5rem;
    }
}
.project-modern-card {
    display: flex;
    align-items: stretch;
    background: radial-gradient(ellipse at top left, #2d1457 60%, #12002f 100%);
    border-radius: 24px;
    box-shadow: 0 8px 40px 0 #a78bfa55, 0 0 16px 2px #7c3aed99;
    overflow: hidden;
    margin-bottom: 3rem;
    position: relative;
    min-height: 320px;
}
.project-modern-content {
    flex: 1 1 0;
    padding: 2.5rem 2rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: #fff;
    z-index: 2;
}
.project-modern-label {
    color: #a78bfa;
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
    letter-spacing: 1px;
}
.project-modern-title {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 1.2rem;
    color: #fff;
}
.project-modern-desc {
    background: rgba(44, 22, 87, 0.7);
    border-radius: 16px;
    padding: 1.2rem 1.5rem;
    font-size: 1.08rem;
    margin-bottom: 1.2rem;
    box-shadow: 0 4px 24px 0 #a78bfa22;
    backdrop-filter: blur(6px);
}
.project-modern-tech {
    margin-bottom: 1.2rem;
}
.project-modern-tech .badge {
    background: linear-gradient(135deg, #a78bfa 0%, #7c3aed 100%);
    color: #fff;
    margin-right: 0.5rem;
    font-size: 0.85rem;
    border-radius: 12px;
    padding: 0.3rem 0.9rem;
    font-weight: 500;
}
.project-modern-link a {
    color: #a78bfa;
    font-weight: 600;
    text-decoration: none;
    transition: color 0.2s;
}
.project-modern-link a:hover {
    color: #fff;
    text-decoration: underline;
}
.project-modern-image-wrap {
    flex: 0 0 380px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: transparent;
    position: relative;
    min-width: 280px;
    max-width: 420px;
}
.project-modern-image {
    width: 90%;
    border-radius: 18px;
    box-shadow: 0 0 0 4px #a78bfa55, 0 8px 32px #7c3aed55;
    transition: transform 0.3s, box-shadow 0.3s;
}
.project-modern-image-wrap:hover .project-modern-image {
    transform: scale(1.04) rotate(-1deg);
    box-shadow: 0 0 0 8px #a78bfa99, 0 16px 48px #7c3aed99;
}
@media (max-width: 900px) {
    .project-modern-card { flex-direction: column; }
    .project-modern-image-wrap { max-width: 100%; min-width: 0; justify-content: flex-start; }
    .project-modern-image { width: 100%; margin: 0 auto; }
}
.project-float-row {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 4rem;
    position: relative;
    min-height: 320px;
    gap: 2.5rem;
}
.project-float-img {
    flex: 0 0 420px;
    max-width: 420px;
    z-index: 2;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 12px 48px 0 #a78bfa99, 0 0 32px 4px #7c3aed77;
    background: #1a1033;
    position: relative;
    transition: box-shadow 0.35s, transform 0.35s;
    will-change: transform, box-shadow;
}
.project-float-img:hover,
.project-float-img:focus-within {
    transform: translateY(-18px) scale(1.05);
    box-shadow: 0 24px 64px 0 #a78bfaee, 0 0 48px 8px #7c3aedcc;
    z-index: 10;
}
.project-float-img img {
    width: 100%;
    display: block;
    border-radius: 20px;
    transition: transform 0.3s, box-shadow 0.3s;
    filter: drop-shadow(0 4px 24px #a78bfa55);
}
.project-float-img:hover img {
    transform: scale(1.04) rotate(-1deg);
    box-shadow: 0 0 0 8px #a78bfa99, 0 16px 48px #7c3aed99;
}
.project-float-desc {
    flex: 1 1 0;
    position: relative;
    z-index: 1;
    margin-left: -60px;
    background: rgba(44, 22, 87, 0.7);
    border-radius: 18px;
    box-shadow: 0 4px 24px 0 #a78bfa22;
    backdrop-filter: blur(8px);
    padding: 2rem 2.5rem;
    color: #fff;
    min-width: 320px;
    max-width: 540px;
    transition: box-shadow 0.3s;
}
.project-float-label {
    color: #a78bfa;
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
    letter-spacing: 1px;
}
.project-float-title {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 1.2rem;
    color: #fff;
}
.project-float-text {
    font-size: 1.08rem;
    margin-bottom: 1.2rem;
}
.project-float-tech {
    margin-bottom: 1.2rem;
}
.project-float-tech .badge {
    background: linear-gradient(135deg, #a78bfa 0%, #7c3aed 100%);
    color: #fff;
    margin-right: 0.5rem;
    font-size: 0.85rem;
    border-radius: 12px;
    padding: 0.3rem 0.9rem;
    font-weight: 500;
}
.project-float-link a {
    color: #a78bfa;
    font-weight: 600;
    text-decoration: none;
    transition: color 0.2s;
}
.project-float-link a:hover {
    color: #fff;
    text-decoration: underline;
}
.project-float-row.reverse { flex-direction: row-reverse; }
.project-float-row.reverse .project-float-desc { margin-left: 0; margin-right: -60px; }
@media (max-width: 900px) {
    .project-float-row, .project-float-row.reverse { flex-direction: column; gap: 1.5rem; }
    .project-float-desc, .project-float-img { margin-left: 0; margin-right: 0; max-width: 100%; }
    .project-float-desc { margin-top: -40px; }
    .project-float-row.reverse .project-float-desc { margin-top: -40px; }
}

/* Achievements Section Styling */
.achievement-timeline {
    position: relative;
    padding: 2rem 0;
}

.timeline-period {
    text-align: center;
    margin-bottom: 3rem;
}

.period-badge {
    display: inline-block;
    background: linear-gradient(135deg, #a78bfa 0%, #7c3aed 100%);
    color: #fff;
    padding: 0.75rem 2rem;
    border-radius: 25px;
    font-weight: 600;
    font-size: 1.1rem;
    box-shadow: 0 8px 24px rgba(167, 139, 250, 0.3);
    border: 2px solid rgba(167, 139, 250, 0.2);
    transition: all 0.3s ease;
}

.period-badge:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 32px rgba(167, 139, 250, 0.4);
}

.achievement-list {
    position: relative;
}

.achievement-list::before {
    content: '';
    position: absolute;
    left: 30px;
    top: 0;
    bottom: 0;
    width: 2px;
    background: linear-gradient(180deg, transparent, #a78bfa, transparent);
    opacity: 0.6;
}

.achievement-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 2rem;
    position: relative;
    padding-left: 80px;
    transition: all 0.3s ease;
}

.achievement-item:hover {
    transform: translateX(10px);
}

.achievement-icon {
    position: absolute;
    left: 0;
    top: 0;
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #2d1457 60%, #7c3aed22 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 0 24px 4px #a78bfa33, 0 0 8px 2px #7c3aed55;
    border: 2px solid #a78bfa33;
    transition: all 0.3s ease;
    z-index: 2;
}

.achievement-icon i {
    font-size: 1.5rem;
    color: #a78bfa;
    transition: all 0.3s ease;
}

.achievement-item:hover .achievement-icon {
    transform: scale(1.1) rotate(5deg);
    box-shadow: 0 0 32px 8px #a78bfa66, 0 0 16px 4px #7c3aed99;
    background: linear-gradient(135deg, #a78bfa 0%, #7c3aed 100%);
}

.achievement-item:hover .achievement-icon i {
    color: #fff;
    transform: scale(1.1);
}

.achievement-content {
    background: linear-gradient(135deg, #2d1457 60%, #7c3aed22 100%);
    border-radius: 18px;
    padding: 1.5rem 2rem;
    box-shadow: 0 0 32px 8px #a78bfa33, 0 0 8px 2px #7c3aed55;
    border: 1.5px solid #a78bfa33;
    transition: all 0.3s ease;
    flex: 1;
}

.achievement-item:hover .achievement-content {
    transform: translateY(-4px);
    box-shadow: 0 0 48px 16px #a78bfa77, 0 0 16px 4px #7c3aedcc;
}

.achievement-content h5 {
    color: #fff;
    font-weight: 600;
    margin-bottom: 0.5rem;
    font-size: 1.1rem;
}

.achievement-content p {
    color: #a78bfa;
    margin: 0;
    font-size: 0.95rem;
    opacity: 0.9;
}

/* Responsive adjustments for achievements */
@media (max-width: 768px) {
    .achievement-item {
        padding-left: 60px;
        margin-bottom: 1.5rem;
    }

    .achievement-icon {
        width: 50px;
        height: 50px;
    }

    .achievement-icon i {
        font-size: 1.2rem;
    }

    .achievement-content {
        padding: 1rem 1.5rem;
    }

    .achievement-content h5 {
        font-size: 1rem;
    }

    .achievement-content p {
        font-size: 0.9rem;
    }

    .achievement-list::before {
        left: 25px;
    }
}

/* Enhanced Contact Section Styling */
.contact-header h4 {
    font-size: 1.5rem;
    letter-spacing: -0.5px;
}

.contact-info-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.contact-info-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1.5rem;
    background: linear-gradient(135deg, rgba(167, 139, 250, 0.1) 0%, rgba(124, 58, 237, 0.1) 100%);
    border: 1px solid rgba(167, 139, 250, 0.2);
    border-radius: 16px;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
}

.contact-info-item:hover {
    transform: translateY(-4px);
    background: linear-gradient(135deg, rgba(167, 139, 250, 0.15) 0%, rgba(124, 58, 237, 0.15) 100%);
    border-color: rgba(167, 139, 250, 0.4);
    box-shadow: 0 8px 32px rgba(167, 139, 250, 0.2);
}

.contact-info-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #a78bfa 0%, #7c3aed 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    transition: all 0.3s ease;
}

.contact-info-icon i {
    color: #fff;
    font-size: 1.2rem;
}

.contact-info-item:hover .contact-info-icon {
    transform: scale(1.1) rotate(5deg);
    box-shadow: 0 4px 16px rgba(167, 139, 250, 0.4);
}

.contact-info-content h6 {
    color: #fff;
    font-weight: 600;
    margin-bottom: 0.25rem;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.contact-info-content a,
.contact-info-content span {
    color: #a78bfa;
    text-decoration: none;
    font-size: 0.95rem;
    transition: color 0.3s ease;
}

.contact-info-content a:hover {
    color: #fff;
}

.contact-social {
    border-top: 1px solid rgba(167, 139, 250, 0.2);
    padding-top: 2rem;
}

.social-links {
    display: flex;
    justify-content: center;
    gap: 1.5rem;
    flex-wrap: wrap;
}

.social-link {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1.5rem;
    background: linear-gradient(135deg, rgba(167, 139, 250, 0.1) 0%, rgba(124, 58, 237, 0.1) 100%);
    border: 1px solid rgba(167, 139, 250, 0.2);
    border-radius: 25px;
    color: #a78bfa;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
}

.social-link:hover {
    transform: translateY(-2px);
    background: linear-gradient(135deg, rgba(167, 139, 250, 0.2) 0%, rgba(124, 58, 237, 0.2) 100%);
    border-color: rgba(167, 139, 250, 0.4);
    box-shadow: 0 8px 24px rgba(167, 139, 250, 0.3);
    color: #fff;
}

.social-link i {
    font-size: 1.1rem;
    transition: transform 0.3s ease;
}

.social-link:hover i {
    transform: scale(1.1);
}

/* Responsive adjustments for contact */
@media (max-width: 768px) {
    .contact-info-grid {
        grid-template-columns: 1fr;
        gap: 1rem;
    }

    .contact-info-item {
        padding: 1rem;
    }

    .contact-info-icon {
        width: 40px;
        height: 40px;
    }

    .contact-info-icon i {
        font-size: 1rem;
    }

    .social-links {
        gap: 1rem;
    }

    .social-link {
        padding: 0.6rem 1.2rem;
        font-size: 0.9rem;
    }
}
</style>
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
        <div class="project-float-row">
            <div class="project-float-img">
                <img src="{{ asset(path: 'storage/php.webp') }}">
            </div>
            <div class="project-float-desc glass">
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
