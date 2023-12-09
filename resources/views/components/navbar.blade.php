<nav class="navbar navbar-expand-lg px-0 py-3 fixed-top" style="background-color: #fafafa">
    <div class="container-md">
        <!-- Logo -->
        <a class="navbar-brand" href="/home">
            <img src="{{ asset('logo.svg') }}" class="" alt="...">
        </a>
        <!-- Navbar toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <!-- Nav -->
            <div class="navbar-nav mx-lg-auto py-4 py-md-0">
                <a class="nav-item nav-link {{ Request::is('/') ? 'active tw-font-semibold' : '' }}" href="/"
                    aria-current="page">Home</a>
                <a class="nav-item nav-link {{ Request::is('antrian') ? 'active tw-font-semibold' : '' }}"
                    href="{{ route('antrian') }}">Antrian</a>
                <a class="nav-item nav-link {{ Request::is('berita') ? 'active tw-font-semibold' : '' }}"
                    href="{{ route('blog') }}">Berita</a>
                <a class="nav-item nav-link {{ Request::is('link-terkait') ? 'active tw-font-semibold' : '' }}"
                    href="{{ route('link-terkait') }}">Link Terkait</a>
                <a class="nav-item nav-link {{ Request::is('contact') ? 'active tw-font-semibold' : '' }}"
                    href="{{ route('contact') }}">Kontak</a>
                <a class="nav-item nav-link {{ Request::is('pegawai') ? 'active tw-font-semibold' : '' }}"
                    href="{{ route('pegawai') }}">Pegawai KCD</a>
            </div>
            <!-- Right navigation -->
            <div class="navbar-nav ms-lg-4 ">
                <a class="nav-item nav-link d-none" href="#">Sign in</a>
            </div>
            <!-- Action -->
            <div class="d-flex align-items-lg-center mt-3 mt-lg-0 ">
                <a href="#" class="btn btn-sm btn-primary d-none w-full w-lg-auto">
                    Register
                </a>
            </div>
        </div>
    </div>
</nav>
