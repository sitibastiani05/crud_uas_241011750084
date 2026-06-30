@extends('layouts.app')

@section('title', $workshop->judul)

@section('content')

<section class="py-5">

<div class="container">

<div class="row">

<div class="col-lg-8">

<div class="card shadow-lg border-0 mb-4">

<img

src="{{ asset('images/workshop/'.$workshop->gambar) }}"

class="card-img-top"

style="height:450px;object-fit:cover;">

<div class="card-body p-4">

<span class="badge bg-primary mb-3">

Workshop IT

</span>

<h2 class="fw-bold mb-3">

{{ $workshop->judul }}

</h2>

<p class="text-muted">

{{ $workshop->deskripsi }}

</p>

<hr>

<h4 class="fw-bold mb-3">

<i class="bi bi-file-text-fill text-primary"></i>

Deskripsi Workshop

</h4>

<p class="text-secondary">

{{ $workshop->deskripsi }}

</p>

</div>

</div>

</div>

<div class="col-lg-4">

<div class="card shadow border-0 sticky-top" style="top:100px;">

<div class="card-body">

<h4 class="fw-bold mb-4">

Informasi Workshop

</h4>

<div class="mb-3">

<i class="bi bi-person-fill text-primary me-2"></i>

<strong>Pembicara</strong>

<br>

<span class="text-muted">

{{ $workshop->pembicara }}

</span>

</div>

<div class="mb-3">

<i class="bi bi-geo-alt-fill text-danger me-2"></i>

<strong>Lokasi</strong>

<br>

<span class="text-muted">

{{ $workshop->lokasi }}

</span>

</div>

<div class="mb-3">

<i class="bi bi-building-fill text-success me-2"></i>

<strong>Penyelenggara</strong>

<br>

<span class="text-muted">

{{ $workshop->penyelenggara }}

</span>

</div>

<div class="mb-4">

<i class="bi bi-calendar-event-fill text-warning me-2"></i>

<strong>Tanggal</strong>

<br>

<span class="text-muted">

{{ \Carbon\Carbon::parse($workshop->tanggal)->translatedFormat('d F Y') }}

</span>

</div>

<a href="/workshop"

class="btn btn-primary w-100 mb-2">

<i class="bi bi-arrow-left-circle"></i>

Kembali ke Workshop

</a>

<a href="/"

class="btn btn-outline-primary w-100">

<i class="bi bi-house-door-fill"></i>

Beranda

</a>

</div>

</div>

</div>

</div>

</div>

</section>

@endsection