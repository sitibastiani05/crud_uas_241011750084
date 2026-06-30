<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">

    <div class="container">

        <a class="navbar-brand fw-bold text-primary" href="/">

            <i class="bi bi-mortarboard-fill"></i>

            Workshop IT

        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menu">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav mx-auto">

                <li class="nav-item">

                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}"
                       href="/">

                        Home

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link {{ Request::is('workshop*') ? 'active' : '' }}"
                       href="/workshop">

                        Workshop

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link {{ Request::is('tentang') ? 'active' : '' }}"
                       href="/tentang">

                        Tentang Kami

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link {{ Request::is('kontak') ? 'active' : '' }}"
                       href="/kontak">

                        Kontak

                    </a>

                </li>

            </ul>

            @auth

            <div class="d-flex align-items-center">

                <span class="me-3 fw-semibold text-primary">

                    👋 {{ Auth::user()->name }}

                </span>

                <a href="/admin" class="btn btn-primary me-2">

                    Dashboard

                </a>

                <form action="/logout" method="POST" class="d-inline">

                    @csrf

                    <button type="submit" class="btn btn-danger">

                        Logout

                    </button>

                </form>

            </div>

            @endauth

            @guest

            <a href="/login" class="btn btn-primary">

                Login Admin

            </a>

            @endguest

        </div>

    </div>

</nav>