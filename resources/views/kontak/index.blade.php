@extends('layouts.app')

@section('title','Kontak')

@section('content')

<section class="py-5">

<div class="container">

<div class="text-center mb-5">

<span class="badge bg-primary px-3 py-2 mb-3">

Kontak Kami

</span>

<h1 class="fw-bold">

Hubungi

<span class="text-warning">

Workshop IT

</span>

</h1>

<p class="text-muted mx-auto" style="max-width:700px;">

Apabila Anda memiliki pertanyaan mengenai workshop, seminar,
atau pelatihan yang tersedia, silakan hubungi kami melalui
informasi berikut atau kirimkan pesan kepada kami.

</p>

</div>

<div class="row g-4">

<!-- Informasi -->

<div class="col-lg-5">

<div class="card shadow border-0 h-100">

<div class="card-body p-4">

<h4 class="fw-bold mb-4">

<i class="bi bi-info-circle-fill text-primary me-2"></i>

Informasi Kontak

</h4>

<div class="mb-4">

<h6 class="fw-bold">

<i class="bi bi-geo-alt-fill text-danger me-2"></i>

Alamat

</h6>

<p class="text-muted mb-0">

Universitas Pamulang<br>

Jl. Surya Kencana No.1,

Tangerang Selatan

</p>

</div>

<div class="mb-4">

<h6 class="fw-bold">

<i class="bi bi-envelope-fill text-warning me-2"></i>

Email

</h6>

<p class="text-muted mb-0">

<a href="mailto:sitibastiani05@gmail.com"
class="text-decoration-none">

sitibastiani05@gmail.com

</a>

</p>

</div>

<div class="mb-4">

<h6 class="fw-bold">

<i class="bi bi-telephone-fill text-success me-2"></i>

Telepon

</h6>

<p class="text-muted mb-0">

(021) 7412566

</p>

</div>

<div class="mb-4">

<h6 class="fw-bold">

<i class="bi bi-clock-fill text-primary me-2"></i>

Jam Operasional

</h6>

<p class="text-muted mb-0">

Senin - Jumat

<br>

08.00 - 17.00 WIB

</p>

</div>

<hr>

<div class="d-flex gap-3 mt-4">

<a href="#" class="fs-3 text-primary">

<i class="bi bi-facebook"></i>

</a>

<a href="#" class="fs-3 text-danger">

<i class="bi bi-instagram"></i>

</a>

<a href="#" class="fs-3 text-info">

<i class="bi bi-linkedin"></i>

</a>

<a href="#" class="fs-3 text-dark">

<i class="bi bi-github"></i>

</a>

</div>

</div>

</div>

</div>

<!-- Form -->

<div class="col-lg-7">

<div class="card shadow border-0">

<div class="card-body p-4">

<h4 class="fw-bold mb-4">

<i class="bi bi-chat-dots-fill text-primary me-2"></i>

Kirim Pesan

</h4>

<form>

<div class="row">

<div class="col-md-6 mb-3">

<label class="form-label">

Nama

</label>

<input

type="text"

class="form-control"

placeholder="Masukkan nama">

</div>

<div class="col-md-6 mb-3">

<label class="form-label">

Email

</label>

<input

type="email"

class="form-control"

placeholder="Masukkan email">

</div>

</div>

<div class="mb-3">

<label class="form-label">

Subjek

</label>

<input

type="text"

class="form-control"

placeholder="Masukkan subjek">

</div>

<div class="mb-4">

<label class="form-label">

Pesan

</label>

<textarea

rows="6"

class="form-control"

placeholder="Tulis pesan Anda..."></textarea>

</div>

<button

type="button"

class="btn btn-primary">

<i class="bi bi-send-fill me-2"></i>

Kirim Pesan

</button>

</form>

</div>

</div>

<div class="card shadow border-0 mt-4 overflow-hidden">

<iframe

src="https://www.google.com/maps?q=Universitas+Pamulang&output=embed"

height="320"

style="border:0;"

loading="lazy"

allowfullscreen>

</iframe>

</div>

</div>

</div>

</div>

</section>

@endsection