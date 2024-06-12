<div class="container p-5">
    <h2 class="text-center fw-bold text-gray pb-5">PENGUMUMAN</h2>
    <form action="/announcements" method="get">
        <div class="input-group mb-3 pb-3">
            <input type="text" class="form-control p-3" placeholder="Telusuri..." name="search" value="{{ request('search') }}">
            <button class="btn btn-danger p-3" type="submit">Search</button>
        </div>
    </form>

    @if($announcements->count())
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach ($announcements as $announcement)
                {{-- KOLOM PENGUMUMAN  --}}
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $announcement->title }}</h5>
                            <p class="card-text">{{ $announcement->description }}</p>
                            <a href="/announcements/{{$announcement->slug}}" class="btn btn-danger">Baca selengkapnya</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Dipublish pada {{ $announcement->created_at }}</small>
                        </div>
                    </div>
                </div>
                {{-- ------------------------------  --}}
            @endforeach
        </div>
        <div class="container mt-3 mb-3">
            <div class="d-block dark">
                {{ $announcements->links() }}
            </div>
        </div>
    @else
        <div class="alert alert-warning text-center pt-5 pb-5">
            <i data-feather="help-circle" class="mb-2 "></i>
            <h4>Belum ada pengumuman yang ditambahkan.</h4>
        </div>
    @endif
</div>
