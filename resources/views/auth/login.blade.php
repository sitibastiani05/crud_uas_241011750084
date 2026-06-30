@extends('layouts.app')

@section('content')

<section class="hero-section" style="min-height:100vh;">

<div class="container">

<div class="row justify-content-center align-items-center">

<div class="col-lg-5">

<div class="card shadow-lg border-0 rounded-4">

<div class="card-body p-5">

<div class="text-center mb-4">

<i class="bi bi-shield-lock-fill text-primary"
style="font-size:65px;"></i>

<h2 class="fw-bold mt-3">

Login Administrator

</h2>

<p class="text-muted">

Silakan login untuk mengelola data Workshop IT.

</p>

</div>

@if(session('error'))

<div class="alert alert-danger rounded-3">

<i class="bi bi-exclamation-circle-fill"></i>

{{ session('error') }}

</div>

@endif

<form action="/login" method="POST">

@csrf

<div class="mb-3">

<label class="form-label fw-semibold">

Username

</label>

<div class="input-group">

<span class="input-group-text">

<i class="bi bi-person-fill"></i>

</span>

<input

type="text"

name="username"

class="form-control"

placeholder="Masukkan username"

required>

</div>

</div>

<div class="mb-4">

<label class="form-label fw-semibold">

Password

</label>

<div class="input-group">

<span class="input-group-text">

<i class="bi bi-lock-fill"></i>

</span>

<input

type="password"

name="password"

class="form-control"

placeholder="Masukkan password"

required>

</div>

</div>

<button class="btn btn-primary w-100 py-2">

<i class="bi bi-box-arrow-in-right me-2"></i>

Masuk ke Dashboard

</button>

</form>

<div class="text-center mt-4">

<a href="/" class="text-decoration-none">

<i class="bi bi-arrow-left"></i>

Kembali ke Beranda

</a>

</div>

</div>

</div>

</div>

</div>

</div>

</section>

@endsection