@extends('dashboard.layouts.main')

@section('container')

    <div class="container p-5">
        
        <h2 class="pb-4">{{ $post->title }}</h2>
        <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span>Kembali</a>

        {{-- Uncomment this section if you have an edit feature --}}
        {{-- <a href="{{ route('dashboard.posts.edit', $post->slug) }}" class="btn btn-warning"><span data-feather="edit"></span>Edit</a> --}}

        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger border-0" onclick="return confirm('Apakah anda Yakin Ingin Menghapus Data?')"><span data-feather="x-circle"></span>Hapus</button>
        </form>

        <div class="w-100 h-100 pt-4">
            {{-- Use asset() to generate correct URL for the image --}}
            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}">
        </div>


        <article class="pt-4">
            {!! $post->body !!}
        </article>
    </div>

    

@endsection
