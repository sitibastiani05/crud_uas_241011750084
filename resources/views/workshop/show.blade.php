@extends('layouts.app')

@section('title', 'Detail Workshop')

@section('content')

<div class="container py-5">

    <div class="row">

        <div class="col-lg-6">

            <img src="{{ asset('images/workshop/' . $workshop->gambar) }}"
                 class="img-fluid rounded shadow">

        </div>

        <div class="col-lg-6">

            <h2 class="fw-bold">

                {{ $workshop->judul }}

            </h2>

            <hr>

            <p>

                <b>Pembicara :</b>

                {{ $workshop->pembicara }}

            </p>

            <p>

                <b>Lokasi :</b>

                {{ $workshop->lokasi }}

            </p>

            <p>

                <b>Penyelenggara :</b>

                {{ $workshop->penyelenggara }}

            </p>

            <p>

                <b>Tanggal :</b>

                {{ \Carbon\Carbon::parse($workshop->tanggal)->translatedFormat('d F Y') }}

            </p>

            <p>

                {{ $workshop->deskripsi }}

            </p>

            <a href="/" class="btn btn-secondary">

                Kembali

            </a>

        </div>

    </div>

</div>

@endsection