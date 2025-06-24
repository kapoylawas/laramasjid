<div class="navbar navbar-expand-lg navbar-light bg-white shadow-sm clever-main-menu">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('img/icons') }}/laravel.jpg" width="50" alt="" class="mr-2 rounded-circle">
            <span class="font-weight-bold">Masjid</span>
        </a>

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu Content -->
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') || Request::is('home') ? 'text-primary font-weight-bold' : 'text-dark' }}"
                        href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'text-primary font-weight-bold' : 'text-dark' }}"
                        href="{{ route('about') }}">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contact') ? 'text-primary font-weight-bold' : 'text-dark' }}"
                        href="{{ route('contact') }}">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::segment(1) == 'artikel' ? 'text-primary font-weight-bold' : 'text-dark' }}"
                        href="{{ route('artikel') }}">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::segment(1) == 'pengumuman' ? 'text-primary font-weight-bold' : 'text-dark' }}"
                        href="{{ route('pengumuman') }}">Pengumuman</a>
                </li>
            </ul>

            <!-- Search Form -->
            <form class="form-inline my-2 my-lg-0 mr-3" action="{{ route('artikel.search') }}" method="GET">
                <div class="input-group">
                    <input name="keyword" id="search" class="form-control form-control-sm" placeholder="Search..."
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary btn-sm" type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </form>

            @auth
                <div class="dropdown">
                    <a class="btn btn-light dropdown-toggle d-flex align-items-center" href="#" role="button"
                        id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2">{{ auth()->user()->name }}</span>
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="{{ route('admin.index') }}">
                            <i class="fa fa-tachometer mr-2" aria-hidden="true"></i>Dashboard
                        </a>
                        <div class="dropdown-divider"></div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="fa fa-sign-out mr-2" aria-hidden="true"></i>Logout
                            </button>
                        </form>
                    </div>
                </div>
            @endauth
        </div>
    </div>
</div>

<style>
    .navbar {
        padding: 0.8rem 1rem;
        transition: all 0.3s ease;
    }

    .navbar-brand {
        font-size: 1.5rem;
    }

    .nav-link {
        padding: 0.5rem 1rem;
        transition: color 0.2s ease;
        position: relative;
    }

    .nav-link:hover {
        color: #007bff !important;
    }

    .nav-link.text-primary::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 15%;
        width: 70%;
        height: 2px;
        background-color: #007bff;
        transition: all 0.3s ease;
    }

    @media (max-width: 991.98px) {
        .navbar-collapse {
            padding: 1rem 0;
        }

        .nav-link {
            padding: 0.75rem 1rem;
        }

        .form-inline {
            margin: 1rem 0 !important;
        }
    }
</style>
