<div class="container p-5">
    <article>
        {{-- <img src="{{ $gambar_berita }}" class="card-img-top" alt="..."> --}}
        <h2 class="pb-4">{{ $announcement->title }}</h2>
        
        <div class="pb-4">
            {!! $announcement->body !!}
        </div>
    </article>
    <a href="/pengumuman" class="btn btn-primary">Kembali ke Halaman Pengumuman</a>
</div>
