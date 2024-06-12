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
            <div class="col-md-4 p-5 text-dark ">
                <img class="mb-4 bg-white" src="img/dispora.png" alt="Logo" height="100">
                <p class="text-white">Website Resmi Milik Dinas Kepemudaan dan Olahraga Kota Blitar</p>
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
                <h5 class="pb-3">Email</h5>
                <p>Email: dispora@blitarkota.go.id</p>
                <a href="{{ url('/login') }}" style="text-decoration: none; color: #ffffff" class="badge bg-primary p-2 px-3">
                Login as admin</a>
            </div>
        </div>
    </div>
</footer>
