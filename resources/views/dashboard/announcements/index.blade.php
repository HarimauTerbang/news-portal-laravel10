@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pengaturan Postingan Pengumuman</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

      <a href="/dashboard/announcements/create" class="btn btn-primary mb-3"><span data-feather="plus"></span> Tambah Postingan</a>
    
    <div class="table-responsive col-lg-8">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col" class="col-md-1 ">#</th>
              <th scope="col" class="col-md-2">Title</th>
              <th scope="col" class="col-md-4">Description</th>
              <th scope="col" class="col-md-2">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($announcements as $announcement)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $announcement->title }}</td>
                <td>{{ $announcement->description }}</td>
                <td>
                    <a href="/dashboard/announcements/{{ $announcement->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                    {{-- <a href="/dashboard/announcements/{{ $announcement->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a> --}}

                    <form action="/dashboard/announcements/{{ $announcement->slug }}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda Yakin Ingin Menghapus Data?')"><span data-feather="x-circle"></span></button>
                    </form>

                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection
