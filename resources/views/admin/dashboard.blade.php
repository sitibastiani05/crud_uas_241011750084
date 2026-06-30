@extends('layouts.admin')

@section('admin-content')

<div class="d-flex justify-content-between align-items-center mb-5">

    <div>

        <h2 class="fw-bold mb-1">

            Dashboard Admin

        </h2>

        <p class="text-muted mb-0">

            Selamat datang kembali 👋 Kelola seluruh data workshop dari sini.

        </p>

    </div>

    <a href="/admin/workshop/create" class="btn btn-primary">

        <i class="bi bi-plus-circle-fill me-2"></i>

        Tambah Workshop

    </a>

</div>

<!-- Statistik -->

<div class="row g-4 mb-5">

    <div class="col-lg-3">

        <div class="card shadow-sm h-100">

            <div class="card-body d-flex justify-content-between align-items-center">

                <div>

                    <small class="text-muted">

                        Total Workshop

                    </small>

                    <h2 class="fw-bold text-primary mb-0">

                        {{ $workshops->count() }}

                    </h2>

                </div>

                <i class="bi bi-journal-bookmark-fill text-primary"
                    style="font-size:45px;"></i>

            </div>

        </div>

    </div>

    <div class="col-lg-3">

        <div class="card shadow-sm h-100">

            <div class="card-body d-flex justify-content-between align-items-center">

                <div>

                    <small class="text-muted">

                        Total Admin

                    </small>

                    <h2 class="fw-bold text-success mb-0">

                        1

                    </h2>

                </div>

                <i class="bi bi-person-fill-gear text-success"
                    style="font-size:45px;"></i>

            </div>

        </div>

    </div>

    <div class="col-lg-3">

        <div class="card shadow-sm h-100">

            <div class="card-body d-flex justify-content-between align-items-center">

                <div>

                    <small class="text-muted">

                        Status Sistem

                    </small>

                    <h2 class="fw-bold text-info mb-0">

                        Online

                    </h2>

                </div>

                <i class="bi bi-wifi text-info"
                    style="font-size:45px;"></i>

            </div>

        </div>

    </div>

    <div class="col-lg-3">

        <div class="card shadow-sm h-100">

            <div class="card-body d-flex justify-content-between align-items-center">

                <div>

                    <small class="text-muted">

                        Data Ditampilkan

                    </small>

                    <h2 class="fw-bold text-warning mb-0">

                        {{ $workshops->count() }}

                    </h2>

                </div>

                <i class="bi bi-bar-chart-fill text-warning"
                    style="font-size:45px;"></i>

            </div>

        </div>

    </div>

</div>

<!-- Search -->

<div class="card shadow-sm mb-4">

    <div class="card-body">

        <form method="GET" action="/admin">

            <div class="input-group">

                <span class="input-group-text bg-white">

                    <i class="bi bi-search"></i>

                </span>

                <input

                    type="text"

                    name="search"

                    class="form-control"

                    placeholder="Cari workshop..."

                    value="{{ request('search') }}">

                <button class="btn btn-primary">

                    Cari

                </button>

            </div>

        </form>

    </div>

</div>

<!-- Table -->

<div class="card shadow">

    <div class="card-header bg-primary text-white d-flex justify-content-between">

        <span>

            <i class="bi bi-table me-2"></i>

            Data Workshop

        </span>

        <span>

            Total :

            {{ $workshops->count() }}

        </span>

    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-hover align-middle">

                <thead class="table-light">

                    <tr>

                        <th>No</th>

                        <th>Judul</th>

                        <th>Pembicara</th>

                        <th>Lokasi</th>

                        <th>Tanggal</th>

                        <th class="text-center">

                            Aksi

                        </th>

                    </tr>

                </thead>

                <tbody>

                @forelse($workshops as $workshop)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>

                        <strong>

                            {{ $workshop->judul }}

                        </strong>

                    </td>

                    <td>

                        {{ $workshop->pembicara }}

                    </td>

                    <td>

                        {{ $workshop->lokasi }}

                    </td>

                    <td>

                        {{ \Carbon\Carbon::parse($workshop->tanggal)->translatedFormat('d F Y') }}

                    </td>

                    <td class="text-center">

                        <a

                            href="/admin/workshop/edit/{{ $workshop->id }}"

                            class="btn btn-warning btn-sm">

                            <i class="bi bi-pencil-square"></i>

                        </a>

                        <form

                            action="/admin/workshop/delete/{{ $workshop->id }}"

                            method="POST"

                            class="d-inline delete-form">

                            @csrf

                            @method('DELETE')

                            <button

                                type="button"

                                class="btn btn-danger btn-sm btn-delete">

                                <i class="bi bi-trash-fill"></i>

                            </button>

                        </form>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="6" class="text-center py-4">

                        Belum ada data workshop.

                    </td>

                </tr>

                @endforelse

                </tbody>

            </table>

        </div>

        <div class="mt-4 d-flex justify-content-center">

            {{ $workshops->links('pagination::bootstrap-5') }}

        </div>

    </div>

</div>

<script>

document.querySelectorAll('.btn-delete').forEach(button=>{

button.addEventListener('click',function(){

const form=this.closest('.delete-form');

Swal.fire({

title:'Yakin ingin menghapus?',

text:'Data tidak dapat dikembalikan.',

icon:'warning',

showCancelButton:true,

confirmButtonText:'Ya, Hapus',

cancelButtonText:'Batal',

confirmButtonColor:'#dc3545'

}).then((result)=>{

if(result.isConfirmed){

form.submit();

}

});

});

});

</script>

@endsection