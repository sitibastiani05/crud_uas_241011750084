@extends('layouts.admin')

@section('admin-content')

<div class="container py-5">

    <div class="card shadow border-0">

        <div class="card-header bg-primary text-white">

            <h4 class="mb-0">

                Edit Workshop

            </h4>

        </div>

        <div class="card-body">

            @if ($errors->any())

            <div class="alert alert-danger">

                <ul class="mb-0">

                    @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

            @endif

            <form
                action="/admin/workshop/update/{{ $workshop->id }}"
                method="POST">

                @csrf

                <div class="mb-3">

                    <label class="form-label">

                        Judul Workshop

                    </label>

                    <input
                        type="text"
                        name="judul"
                        class="form-control"
                        value="{{ $workshop->judul }}"
                        required>

                </div>

                <div class="mb-3">

                    <label class="form-label">

                        Pembicara

                    </label>

                    <input
                        type="text"
                        name="pembicara"
                        class="form-control"
                        value="{{ $workshop->pembicara }}"
                        required>

                </div>

                <div class="mb-3">

                    <label class="form-label">

                        Lokasi

                    </label>

                    <input
                        type="text"
                        name="lokasi"
                        class="form-control"
                        value="{{ $workshop->lokasi }}"
                        required>

                </div>

                <div class="mb-3">

                    <label class="form-label">

                        Penyelenggara

                    </label>

                    <input
                        type="text"
                        name="penyelenggara"
                        class="form-control"
                        value="{{ $workshop->penyelenggara }}"
                        required>

                </div>

                <div class="mb-3">

                    <label class="form-label">

                        Deskripsi

                    </label>

                    <textarea
                        name="deskripsi"
                        class="form-control"
                        rows="5"
                        required>{{ $workshop->deskripsi }}</textarea>

                </div>

                <div class="mb-3">

                    <label class="form-label">

                        Tanggal

                    </label>

                    <input
                        type="date"
                        name="tanggal"
                        class="form-control"
                        value="{{ $workshop->tanggal }}"
                        required>

                </div>

                <button class="btn btn-warning">
                    <i class="bi bi-pencil-square"></i>
                    Update Workshop
                </button>

                <a
                    href="/admin"
                    class="btn btn-secondary">

                    Kembali

                </a>

            </form>

        </div>

    </div>

</div>

@endsection