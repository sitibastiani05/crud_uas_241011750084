@extends('layouts.app')

@section('title', 'Workshop')

@section('content')

<div class="container py-5">

    <div class="text-center mb-5">

        <h2 class="fw-bold">

            Daftar Workshop

        </h2>

        <p class="text-muted">

            Temukan berbagai workshop IT yang tersedia.

        </p>

    </div>

    <div class="row g-4">

        @foreach($workshops as $workshop)

        <div class="col-lg-4 col-md-6">

            <div class="card workshop-card shadow-sm h-100">

                <img src="{{ asset('images/workshop/'.$workshop->gambar) }}"
                     class="workshop-image">

                <div class="card-body">

                    <h5 class="fw-bold">

                        {{ $workshop->judul }}

                    </h5>

                    <p class="text-muted">

                        {{ Str::limit($workshop->deskripsi,80) }}

                    </p>

                    <small>

                        📍 {{ $workshop->lokasi }}

                    </small>

                    <br>

                    <small>

                        👤 {{ $workshop->pembicara }}

                    </small>

                </div>

                <div class="card-footer bg-white border-0">

                    <a href="/workshop/{{ $workshop->id }}"
                       class="btn btn-primary w-100">

                        Lihat Detail

                    </a>

                </div>

            </div>

        </div>

        @endforeach

    </div>

    <div class="mt-5 d-flex justify-content-center">

        {{ $workshops->links('pagination::bootstrap-5') }}

    </div>

</div>

@endsection