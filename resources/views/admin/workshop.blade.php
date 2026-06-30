@extends('layouts.admin')

@section('admin-content')

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2 class="fw-bold">
            Manajemen Workshop
        </h2>

        <div class="d-flex gap-2">

            <a href="/admin/workshop/create" class="btn btn-success">
                <i class="bi bi-plus-circle"></i>
                Tambah Workshop
            </a>

            <a href="/admin/workshop/pdf" class="btn btn-danger">
                <i class="bi bi-file-earmark-pdf"></i>
                Export PDF
            </a>

        </div>

    </div>

    <div class="card shadow mb-4">

        <div class="card-body">

            <form method="GET" action="/admin/workshop">

                <div class="row">

                    <div class="col-md-10">

                        <input
                            type="text"
                            name="search"
                            class="form-control"
                            placeholder="Cari workshop..."
                            value="{{ request('search') }}">

                    </div>

                    <div class="col-md-2">

                        <button class="btn btn-primary w-100">

                            Cari

                        </button>

                    </div>

                </div>

            </form>

        </div>

    </div>

    <div class="card shadow">

        <div class="card-header bg-primary text-white">

            Data Workshop

        </div>

        <div class="card-body">

            <table class="table table-bordered table-hover align-middle">

                <thead>

                    <tr>

                        <th>No</th>
                        <th>Judul</th>
                        <th>Pembicara</th>
                        <th>Lokasi</th>
                        <th>Tanggal</th>
                        <th width="180">Aksi</th>

                    </tr>

                </thead>

                <tbody>

                @forelse($workshops as $workshop)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $workshop->judul }}</td>

                        <td>{{ $workshop->pembicara }}</td>

                        <td>{{ $workshop->lokasi }}</td>

                        <td>{{ $workshop->tanggal }}</td>

                        <td>

                            <a href="/admin/workshop/edit/{{ $workshop->id }}"
                               class="btn btn-warning btn-sm">

                                Edit

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

                                    Hapus

                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="6" class="text-center">

                            Belum ada data workshop.

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

            <div class="d-flex justify-content-center mt-4">

                {{ $workshops->links('pagination::bootstrap-5') }}

            </div>

        </div>

    </div>

</div>

<script>

document.querySelectorAll('.btn-delete').forEach(button => {

    button.addEventListener('click', function () {

        const form = this.closest('.delete-form');

        Swal.fire({

            title: 'Yakin?',

            text: 'Data workshop akan dihapus!',

            icon: 'warning',

            showCancelButton: true,

            confirmButtonColor: '#d33',

            cancelButtonColor: '#3085d6',

            confirmButtonText: 'Ya, Hapus!',

            cancelButtonText: 'Batal'

        }).then((result) => {

            if (result.isConfirmed) {

                form.submit();

            }

        });

    });

});

</script>

@endsection