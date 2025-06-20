@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Daftar Berita</h1>

        <a href="{{ route('admin.berita.create') }}" class="btn btn-primary mb-3">+ Tambah Berita</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Slug</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $berita)
                    <tr>
                        <td>{{ $berita->title }}</td>
                        <td>{{ $berita->slug }}</td>
                        <td>
                            @if ($berita->image)
                                <img src="{{ asset($berita->image) }}" width="100">
                            @else
                                -
                            @endif
                        </td>

                        <td>
                            <a href="{{ route('admin.berita.edit', $berita->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('admin.berita.destroy', $berita->id) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Yakin hapus berita?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $data->links() }}
    </div>
@endsection
