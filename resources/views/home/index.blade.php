@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="hero-section">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-7">

                <span class="badge bg-warning text-dark px-3 py-2 mb-3 shadow-sm">

                    🚀 Platform Workshop Teknologi

                </span>

                <h1>

                    Tingkatkan

                    <span class="text-warning">

                        Skill IT

                    </span>

                    <br>

                    Bersama Para Ahli

                </h1>

                <p class="mt-4">

                    Temukan berbagai workshop IT terbaik untuk meningkatkan kemampuan di bidang
                    Web Development, Data Science, UI/UX, Cloud Computing,
                    Artificial Intelligence, dan teknologi terkini lainnya.

                </p>

                <div class="mt-4">

                    <a href="/workshop" class="btn btn-primary hero-btn me-3">

                        <i class="bi bi-journal-bookmark-fill"></i>

                        Lihat Workshop

                    </a>

                    <a href="/tentang" class="btn hero-btn hero-outline">

                        <i class="bi bi-people-fill"></i>

                        Tentang Kami

                    </a>

                </div>

                <div class="row hero-stat text-center">

                    <div class="col-4">

                        <h3 id="workshop-count">0</h3>

                        <small>Workshop</small>

                    </div>

                    <div class="col-4">

                        <h3 id="peserta-count">0</h3>

                        <small>Peserta</small>

                    </div>

                    <div class="col-4">

                        <h3 id="mentor-count">0</h3>

                        <small>Instruktur</small>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="hero-wave">

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 220">

            <path fill="#f8fafc"
                d="M0,128L60,138.7C120,149,240,171,360,176C480,181,600,171,720,149.3C840,128,960,96,1080,90.7C1200,85,1320,107,1380,117.3L1440,128V320H0Z">

            </path>

        </svg>

    </div>

</section>

<!-- WORKSHOP -->

<section class="py-5">

    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-5">

            <div>

                <h2 class="section-title">

                    Workshop Terbaru

                </h2>

                <p class="text-muted mb-0">

                    Pilih workshop terbaik untuk meningkatkan kemampuan dan karier di dunia teknologi.

                </p>

            </div>

            <a href="/workshop" class="btn btn-outline-primary">

                Lihat Semua

            </a>

        </div>

        <div class="row g-4">

            @foreach($workshops as $workshop)

            <div class="col-lg-3 col-md-6">

                <div class="card workshop-card h-100 shadow-sm">

                    <div class="position-relative">

                        <img src="{{ asset('images/workshop/'.$workshop->gambar) }}"
                            class="workshop-image">

                        <div class="date-badge">

                            {{ \Carbon\Carbon::parse($workshop->tanggal)->format('d') }}

                            <br>

                            {{ strtoupper(\Carbon\Carbon::parse($workshop->tanggal)->translatedFormat('M')) }}

                        </div>

                    </div>

                    <div class="card-body d-flex flex-column">

                        <h5 class="fw-bold">

                            {{ $workshop->judul }}

                        </h5>

                        <small>

                            👨‍💻 {{ $workshop->pembicara }}

                        </small>

                        <small>

                            📍 {{ $workshop->lokasi }}

                        </small>

                        <small>

                            🏢 {{ $workshop->penyelenggara }}

                        </small>

                        <small>

                            📅 {{ \Carbon\Carbon::parse($workshop->tanggal)->translatedFormat('d F Y') }}

                        </small>

                        <div class="mt-auto pt-3">

                            <a href="/workshop/{{ $workshop->id }}"
                                class="btn btn-primary w-100">

                                Detail Workshop

                            </a>

                        </div>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>

<script>

function animateValue(id,end){

let start=0;

const speed=Math.ceil(end/60);

const obj=document.getElementById(id);

const timer=setInterval(function(){

start+=speed;

if(start>=end){

obj.innerHTML=end+"+";

clearInterval(timer);

}else{

obj.innerHTML=start+"+";

}

},20);

}

animateValue("workshop-count",25);

animateValue("peserta-count",800);

animateValue("mentor-count",15);

</script>

@endsection