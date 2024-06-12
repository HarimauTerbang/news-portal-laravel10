<nav class="navbar navbar-expand-lg navbar-light bg-danger shadow p-3">
    <div class="container">
      <a class="navbar-brand text-white fw-bold" href="/">PEMUDA KEREN</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'BERANDA' ? 'active active text-light fw-bold' : '') }}" href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'BERITA' ? 'active active text-light fw-bold' : '') }}" href="/berita">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ ($title === 'PENGUMUMAN' ? 'active text-light fw-bold' : '') }}" href="/pengumuman">Pengumuman</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ ($title === 'KONTAK' ? 'active text-light fw-bold' : '') }}" href="/kontak">Kontak</a>
          </li>
        </ul>
      </div>
      <div class="d-flex justify-content-end">
        <a href="{{ url('/login') }}" class="btn btn-light">Login</a>
      </div>
    </div>
  </nav>
