<div class="container p-5 bg-white">
    <article>
        {{-- <img src="{{ $gambar_berita }}" class="card-img-top" alt="..."> --}}
        <h2 class="pb-4 fw-bold">{{ $announcement->title }}</h2>

        <div class="pb-4">
           <h6> {!! $announcement->body !!}</h6>
        </div>
    </article>
    <a href="/pengumuman" class="btn btn-primary">Kembali ke Halaman Pengumuman</a>
</div>
