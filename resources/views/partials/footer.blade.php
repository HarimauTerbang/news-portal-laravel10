<style>
    .list-unstyled a {
        text-decoration: none;
        color: #ffffff;
    }

    .footer-sosmed a {
        text-decoration: none;
        color: #ffffff;
        padding: 1rem;
    }

    .logo-footer {
        color: #808080;
    }
</style>

<footer class="rounded text-white shadow" style="backgorund-color: transparent; backdrop-filter: blur(20px);">
    <div class="container">
        <div class="row">
            <!-- Kolom pertama -->
            <div class=" col-md-4 p-5 text-dark ">
                <img class="mb-4" src="img/logo_white.png" alt="Logo" height="100">
                <h5 class="fw-bold text-white">PEMUDA KEREN</h5>
                <p class="text-white">Blog Berita dan Informasi Kekinian</p>
            </div>
            <!-- Kolom kedua -->
            <div class="col-md-4 p-5">
                <h5 class="pb-3">Menu</h5>
                <ul class="list-unstyled">
                    <li><a href="/">Beranda</a></li>
                    <li><a href="/berita">Berita</a></li>
                    <li><a href="/pengumuman">Pengumuman</a></li>
                    <li><a href="/kontak">kotak</a></li>
                </ul>
            </div>
            <!-- Kolom ketiga -->
            <div class="col-md-4 p-5">
                <h5 class="pb-3">Email Admin</h5>
                <p>Email: farrelagiarahmana@gmail.com</p>
                <a href="{{ url('/login') }}" style="text-decoration: none; color: #ffffff" class="badge bg-primary p-2 px-3">
                Login as admin</a>
            </div>
        </div>
    </div>
</footer>
