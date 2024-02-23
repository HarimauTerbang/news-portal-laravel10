@extends('dashboard.layouts.main')

@section('container')

    <div class="container p-5">
        
        <h2 class="pb-4">{{ $announcement->title }}</h2>
        <a href="/dashboard/announcements" class="btn btn-success"><span data-feather="arrow-left"></span>Kembali</a>
        {{-- <a href="/dashboard/announcements/{{ $announcement->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a> --}}

        <form action="/dashboard/announcements/{{ $announcement->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger border-0" onclick="return confirm('Apakah anda Yakin Ingin Menghapus Data?')"><span data-feather="x-circle"></span>Hapus</button>
          </form>

        {{-- <img src="{{ $gambar_berita }}" class="card-img-top" alt="..."> --}}
        <article class="pt-4">
            {!! $announcement->body !!}
        </article>
    </div>

@endsection
