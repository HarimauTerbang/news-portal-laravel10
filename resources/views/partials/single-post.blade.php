<div class="container p-5 bg-white">
    <article>
        <h2 class="pb-4 fw-bold">{{ $post->title }}</h2>
        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top pb-4 " alt="{{ $post->title }}">
        <div class="pb-4">
            <h6>{!! $post->body !!}</h6>
        </div>
    </article>
    <a href="/berita" class="btn btn-primary">Kembali ke Halaman Berita</a>
</div>
