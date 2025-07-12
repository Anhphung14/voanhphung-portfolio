@extends('layout')
@section('title', 'Giới thiệu | Võ Anh Phụng')
@section('head')
<style>
.timeline {
  border-left: 3px solid #00b4d8;
  margin-left: 1.5rem;
  padding-left: 1.5rem;
  position: relative;
}
.timeline li {
  margin-bottom: 2rem;
  position: relative;
  list-style: none;
}
.timeline li:before {
  content: '\f111';
  font-family: 'Font Awesome 5 Free';
  font-weight: 900;
  color: #00b4d8;
  position: absolute;
  left: -2.1rem;
  top: 0.1rem;
  font-size: 1rem;
}
.goal-section {
  background: linear-gradient(90deg, #00b4d8 0%, #212a3e 100%);
  color: #fff;
  border-radius: 12px;
  padding: 1.5rem 1.2rem;
  margin-top: 2rem;
  box-shadow: 0 2px 12px rgba(33,42,62,0.07);
}
@media (max-width: 600px) {
  .timeline { margin-left: 0.5rem; padding-left: 1rem; }
}
</style>
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <h2 class="fw-bold mb-3" data-aos="fade-down">Giới thiệu</h2>
        <p data-aos="fade-right">Xin chào! Mình là <b>Võ Anh Phụng</b>, sinh viên mới tốt nghiệp ngành <b>An toàn thông tin</b> tại Học viện Công nghệ Bưu chính Viễn thông TP.HCM (PTIT HCM).</p>
        <p data-aos="fade-right" data-aos-delay="100">Mình định hướng trở thành <b>PHP/Back-End Developer</b>, từng thực tập tại <b>The One Vietnam</b> và <b>Beyond Compass</b>.</p>
        <p data-aos="fade-right" data-aos-delay="200">Mình yêu thích phát triển web, bảo mật hệ thống, và luôn sẵn sàng học hỏi công nghệ mới.</p>
        <h5 class="mt-4" data-aos="fade-up">Học vấn & Kinh nghiệm</h5>
        <ul class="timeline list-unstyled" data-aos="fade-up" data-aos-delay="100">
            <li><b>2019-2023:</b> Sinh viên An toàn thông tin – PTIT HCM</li>
            <li><b>2023:</b> Thực tập sinh PHP Developer – The One Vietnam</li>
            <li><b>2024:</b> Thực tập sinh Back-End – Beyond Compass</li>
        </ul>
        <div class="goal-section" data-aos="zoom-in">
            <h5 class="mb-2"><i class="fa-solid fa-bullseye me-2"></i>Mục tiêu nghề nghiệp</h5>
            <p>Trở thành lập trình viên PHP/Back-End chuyên nghiệp, xây dựng các hệ thống web an toàn, hiệu quả và thân thiện với người dùng.</p>
        </div>
    </div>
</div>
@endsection 