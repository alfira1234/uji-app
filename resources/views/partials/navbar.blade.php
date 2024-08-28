<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container">
        <a class="navbar-brand" href="/">SIME MASBAGIA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Menu' ? 'active' : '' }}" href="#menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === '#berita' ? 'active' : '' }}" href="#berita">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'kontak' ? 'active' : '' }}" href="#kontak">Kontak Kami</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link {{ Request::is('penduduk') ? 'active' : '' }}" href="/penduduk">Penduduk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Pendidikan' ? 'active' : '' }}" href="/pendidikan">Pendidikan</a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link {{ $title === 'Usia' ? 'active' : '' }}" href="/usia">Usia</a>
                </li> --}}

            </ul>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav me-auto">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Welcome Back, {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="/dashboard"><i
                                            class="bi bi-speedometer2"></i>Dashboard</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i
                                                class="bi bi-box-arrow-left"></i>Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="/login" class="nav-link {{ $title === 'login' ? 'active' : '' }}"><i
                                    class="bi bi-box-arrow-in-right"></i> Login</a>
                        </li>
                    @endauth
                </ul>


            </div>
        </div>
</nav>
