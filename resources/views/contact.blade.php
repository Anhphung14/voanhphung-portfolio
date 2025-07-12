@extends('layout')
@section('title', 'Liên hệ | Võ Anh Phụng')
@section('head')
<style>
.contact-form {
  background: #fff;
  border-radius: 16px;
  box-shadow: 0 2px 12px rgba(33,42,62,0.07);
  padding: 2rem 1.5rem;
}
.form-label { font-weight: 600; }
.form-control:focus { border-color: #00b4d8; box-shadow: 0 0 0 2px #00b4d833; }
.btn-primary { background: #00b4d8; border: none; }
.btn-primary:hover { background: #212a3e; }
.contact-info i { color: #00b4d8; margin-right: 8px; }
@media (max-width: 600px) {
  .contact-form { padding: 1rem 0.5rem; }
}
</style>
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <h2 class="fw-bold mb-3" data-aos="fade-down">Liên hệ</h2>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <form method="POST" action="/contact" class="contact-form" data-aos="fade-up">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Họ tên</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Nội dung</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100 py-2"><i class="fa-solid fa-paper-plane me-1"></i> Gửi liên hệ</button>
        </form>
        <div class="contact-info mt-4" data-aos="fade-up" data-aos-delay="200">
            <p><i class="fa-solid fa-envelope"></i><b>Email:</b> pphung1472@gmail.com</p>
            <p><i class="fa-solid fa-phone"></i><b>SĐT:</b> 0796 884 386</p>
            <p><i class="fa-brands fa-github"></i><b>GitHub:</b> <a href="https://github.com/pphung1472" target="_blank">pphung1472</a></p>
        </div>
    </div>
</div>
@endsection 