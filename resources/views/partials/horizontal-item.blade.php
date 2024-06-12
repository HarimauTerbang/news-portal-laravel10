<div class="container p-5">
    <h2 class="text-center fw-bold text-gray pb-5">BERITA</h2>
    <form action="/berita" method="get">
      <div class="input-group mb-3 pb-3">
          <input type="text" class="form-control p-3" placeholder="Telusuri..." name="search" value="{{ request('search') }}">
          <button class="btn btn-danger p-3" type="submit">Search</button>
      </div>
  </form>

  @if($posts->count())
  <div class="row row-cols-1 row-cols-md-3 g-4 d-flex">
    @foreach ($posts as $post)
      {{-- CARD BERITA HORIZONTAL --}}
      <div class="col">
        <div class="card h-100">
          <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}">
          <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->description }}</p>
            <div class="button">
              <a href="/posts/{{$post->slug}}" class="btn btn-danger">Baca selengkapnya</a>
            </div>
          </div>
          <div class="card-footer">
            <small class="text-muted">Dipublish pada {{ $post->created_at }}</small>
          </div>
        </div>
      </div>
      {{-- ------------------------------- --}}
    @endforeach
  </div>
  <div class="container mt-3 mb-3">
    <div class="d-block">
        {{ $posts->links() }}
    </div>
</div>
@else
<div class="alert alert-warning text-center pt-5 pb-5">
    <i data-feather="help-circle" class="mb-2 "></i>
    <h4>Belum ada berita yang ditambahkan.</h4>
</div>
@endif


</div>

