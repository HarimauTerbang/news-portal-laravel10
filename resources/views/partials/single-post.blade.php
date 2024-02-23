<div class="container p-5 m">
    <article>
        <h2 class="pb-4">{{ $post->title }}</h2>
        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top pb-4 " alt="{{ $post->title }}">
        <div class="pb-4">
            {!! $post->body !!}
        </div>
    </article>
    <a href="/berita" class="btn btn-primary">Kembali ke Halaman Berita</a>
</div>
