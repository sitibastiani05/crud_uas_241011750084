@extends('layouts.app')

@section('title','Tentang Kami')

@section('content')

<section class="py-5">

<div class="container">

<div class="text-center mb-5">

<span class="badge bg-primary px-3 py-2 mb-3">

Tentang Kami

</span>

<h1 class="fw-bold">

Mengenal

<span class="text-warning">

Workshop IT

</span>

</h1>

<p class="text-muted mx-auto" style="max-width:700px;">

Workshop IT merupakan platform yang menyediakan informasi mengenai workshop,
seminar, bootcamp, dan pelatihan di bidang teknologi informasi untuk membantu
mahasiswa, fresh graduate, maupun profesional meningkatkan keterampilan digital.

</p>

</div>

<div class="row align-items-center g-5">

<div class="col-lg-6">

<img

src="{{ asset('images/about/about.png') }}"

class="img-fluid rounded-4 shadow">

</div>

<div class="col-lg-6">

<h3 class="fw-bold mb-3">

Siapa Kami?

</h3>

<p class="text-secondary">

Workshop IT hadir sebagai media informasi yang memudahkan masyarakat
menemukan berbagai kegiatan pembelajaran di bidang teknologi seperti
Web Development, UI/UX Design, Data Science, Cloud Computing,
Cyber Security, hingga Artificial Intelligence.

</p>

<p class="text-secondary">

Kami percaya bahwa belajar teknologi harus mudah diakses oleh semua orang.
Melalui platform ini, pengguna dapat menemukan workshop yang sesuai
dengan kebutuhan dan tujuan karier mereka.

</p>

<div class="row mt-4">

<div class="col-6">

<div class="card shadow-sm border-0">

<div class="card-body text-center">

<h3 class="text-primary fw-bold">

25+

</h3>

<p class="mb-0">

Workshop

</p>

</div>

</div>

</div>

<div class="col-6">

<div class="card shadow-sm border-0">

<div class="card-body text-center">

<h3 class="text-success fw-bold">

800+

</h3>

<p class="mb-0">

Peserta

</p>

</div>

</div>

</div>

</div>

</div>

</div>

<!-- VISI MISI -->

<div class="row mt-5 g-4">

<div class="col-lg-6">

<div class="card shadow border-0 h-100">

<div class="card-body">

<h4 class="fw-bold text-primary">

<i class="bi bi-eye-fill me-2"></i>

Visi

</h4>

<p class="text-secondary mb-0">

Menjadi platform informasi workshop teknologi yang terpercaya,
inovatif, dan mampu membantu masyarakat meningkatkan kompetensi
di era digital.

</p>

</div>

</div>

</div>

<div class="col-lg-6">

<div class="card shadow border-0 h-100">

<div class="card-body">

<h4 class="fw-bold text-success">

<i class="bi bi-bullseye me-2"></i>

Misi

</h4>

<ul class="mb-0 text-secondary">

<li>Menyediakan informasi workshop yang lengkap dan terpercaya.</li>

<li>Membantu pengguna menemukan pelatihan yang sesuai.</li>

<li>Mendorong peningkatan kompetensi digital masyarakat.</li>

<li>Mendukung pengembangan karier di bidang teknologi.</li>

</ul>

</div>

</div>

</div>

</div>

<!-- KEUNGGULAN -->

<div class="mt-5">

<h2 class="text-center fw-bold mb-4">

Mengapa Memilih

<span class="text-warning">

Workshop IT?

</span>

</h2>

<div class="row g-4">

<div class="col-md-3">

<div class="card text-center shadow-sm h-100">

<div class="card-body">

<div class="fs-1 mb-3">

🎓

</div>

<h5>

Workshop Berkualitas

</h5>

<p class="text-muted">

Berbagai pilihan workshop dengan materi yang relevan.

</p>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card text-center shadow-sm h-100">

<div class="card-body">

<div class="fs-1 mb-3">

👨‍🏫

</div>

<h5>

Mentor Profesional

</h5>

<p class="text-muted">

Dipandu oleh pemateri yang berpengalaman di bidangnya.

</p>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card text-center shadow-sm h-100">

<div class="card-body">

<div class="fs-1 mb-3">

🏆

</div>

<h5>

Sertifikat

</h5>

<p class="text-muted">

Peserta berkesempatan memperoleh sertifikat workshop.

</p>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card text-center shadow-sm h-100">

<div class="card-body">

<div class="fs-1 mb-3">

🤝

</div>

<h5>

Networking

</h5>

<p class="text-muted">

Membangun relasi dengan peserta dan profesional IT lainnya.

</p>

</div>

</div>

</div>

</div>

</div>

</div>

</section>

@endsection