@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Postingan Pengumuman</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="{{ route('dashboard.announcements.store') }}">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Judul</label>
          <input type="text" class="form-control " id="title" name="title" required autofocus value="{{ old('title') }}" placeholder="maksimal 100 characters">
        </div>

        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control " id="slug" name="slug" readonly value="{{ old('slug') }}">
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Deskripsi</label>
          <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" required value="{{ old('description') }}" placeholder="maksimal 255 characters">
          
          @error('description')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Isi Pengumuman</label>
            <textarea class="form-control @error('body') is-invalid @enderror" id="body" name="body" required rows="15" placeholder="ketik <br><br> untuk membuat paragraf">{{ old('body') }}</textarea>
            
            @error('body')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> 
</div>

<script>
    // AUTO SLUG GENERATE
    document.getElementById('title').addEventListener('input', function() {
        var title = this.value.toLowerCase().trim().replace(/[^a-z0-9\s-]/g, '');
        title = title.replace(/\s+/g, '-');
        document.getElementById('slug').value = title;
    });
</script>
@endsection

