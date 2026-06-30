<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Workshop IT')</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

@include('partials.navbar')

@yield('content')

@include('partials.footer')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('success'))

<script>

Swal.fire({

    icon: 'success',

    title: 'Berhasil',

    text: '{{ session('success') }}',

    timer: 2000,

    showConfirmButton: false

});

</script>

@endif

</body>
</html>