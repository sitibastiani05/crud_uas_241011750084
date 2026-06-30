<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Panel | Workshop IT</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body class="admin-bg">

<div class="d-flex">

    <!-- Sidebar -->

    <aside class="bg-dark text-white shadow-lg"
        style="width:270px;min-height:100vh;position:sticky;top:0;">

        <div class="p-4">

            <div class="text-center mb-4">

                <div class="mb-3">

                    <i class="bi bi-mortarboard-fill"
                        style="font-size:55px;color:#FFD54F;"></i>

                </div>

                <h3 class="fw-bold mb-1">

                    Workshop IT

                </h3>

                <small class="text-secondary">

                    Admin Panel

                </small>

            </div>

            <hr class="border-secondary">

            <div class="mb-4">

                <div class="fw-semibold">

                    👋 Selamat Datang

                </div>

                <small class="text-light">

                    {{ Auth::user()->username }}

                </small>

            </div>

            <a href="/admin"
                class="sidebar-link {{ Request::is('admin') ? 'active' : '' }}">

                <i class="bi bi-speedometer2 me-2"></i>

                Dashboard

            </a>

            <a href="/admin/workshop"
                class="sidebar-link {{ Request::is('admin/workshop*') ? 'active' : '' }}">

                <i class="bi bi-journal-bookmark-fill me-2"></i>

                Data Workshop

            </a>

            <hr class="border-secondary mt-4">

            <form action="/logout" method="POST">

                @csrf

                <button class="btn btn-danger w-100">

                    <i class="bi bi-box-arrow-right me-2"></i>

                    Logout

                </button>

            </form>

        </div>

    </aside>

    <!-- Content -->

    <main class="flex-grow-1 p-5">

        <div class="container-fluid">

            <div class="card shadow-sm border-0 mb-4">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <h3 class="fw-bold mb-1">

                            Dashboard Administrator

                        </h3>

                        <small class="text-muted">

                            Kelola seluruh data workshop dengan mudah.

                        </small>

                    </div>

                    <span class="badge bg-success fs-6">

                        <i class="bi bi-check-circle-fill"></i>

                        Sistem Aktif

                    </span>

                </div>

            </div>

            @yield('admin-content')

        </div>

    </main>

</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('success'))

<script>

Swal.fire({

    icon:'success',

    title:'Berhasil',

    text:'{{ session("success") }}',

    timer:1800,

    showConfirmButton:false

});

</script>

@endif

</body>

</html>