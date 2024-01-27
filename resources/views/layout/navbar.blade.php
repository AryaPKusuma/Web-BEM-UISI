

<nav id="navbar" class="navbar navbar-expand-lg navbar-dark shadow-0 fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('image/logo_bem.png') }}" height="30px">
        <strong style="color: #19A7CE">BEMUISI</strong style="color: #146C94">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="fas fa-bars"></span>
      </button>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a
                  data-mdb-dropdown-init
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  aria-expanded="false"
                >
                  Kementrian
                </a>
                <!-- Dropdown menu -->
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">


                  <li>
                    <a class="dropdown-item" href="/kementrian">Kementrian</a>
                  </li>

                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('/berita') ? 'active' : '' }}" aria-current="page" href="{{ url('/berita') }}">Berita</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('/dokumen') ? 'active' : '' }}" aria-current="page" href="{{ url('/dokumen') }}">Dokumen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('/arsip') ? 'active' : '' }}" aria-current="page" href="{{ url('/arsip') }}">Arsip</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
</nav>
