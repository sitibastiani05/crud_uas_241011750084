@extends('layouts.admin')

@section('admin-content')

<div class="container py-5">

    <div class="card shadow border-0">

        <div class="card-header bg-primary text-white">

            <h4 class="mb-0">

                Tambah Workshop

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
                action="/admin/workshop/store"
                method="POST"
                enctype="multipart/form-data">

                @csrf

                <div class="mb-3">

                    <label class="form-label">

                        Judul Workshop

                    </label>

                    <input
                        type="text"
                        name="judul"
                        class="form-control"
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
                        required></textarea>

                </div>

                <div class="mb-3">

                    <label class="form-label">

                        Tanggal

                    </label>

                    <input
                        type="date"
                        name="tanggal"
                        class="form-control"
                        required>

                </div>

                <div class="mb-4">

                    <label class="form-label">

                        Gambar Workshop

                    </label>

                    <input
                        type="file"
                        name="gambar"
                        class="form-control"
                        accept="image/*"
                        onchange="previewImage(event)"
                        required>

                </div>

                <div class="text-center mb-4">

                    <img
                        id="preview"
                        src="https://placehold.co/300x180?text=Preview+Gambar"
                        class="img-fluid rounded shadow"
                        width="300">

                </div>

                <button class="btn btn-success">

                    <i class="bi bi-save"></i>

                    Simpan Workshop

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

<script>

function previewImage(event){

    const reader = new FileReader();

    reader.onload = function(){

        document.getElementById('preview').src = reader.result;

    }

    reader.readAsDataURL(event.target.files[0]);

}

</script>

@endsection