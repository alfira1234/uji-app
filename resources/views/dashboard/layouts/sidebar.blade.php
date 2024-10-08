<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page"
                    href="/dashboard"><span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/profil') ? 'active' : '' }}" href="/dashboard/profil">
                    <span data-feather="file"></span>
                    Profil
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('penduduk', 'pendidikan', 'agama', 'pencaharian') ? 'active' : '' }}"
                    href="/penduduk">
                    <span data-feather="shopping-cart"></span>
                    Isi data RT
                </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Pengajuan Kontrak
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Status Kontrak
                </a>
            </li>
        </ul>
    </div>
</nav>
