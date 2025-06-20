@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Edit Berita</h1>

        <form method="POST" action="{{ route('admin.berita.update', $berita->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Judul</label>
                <input type="text" name="title" class="form-control" value="{{ $berita->title }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control" value="{{ $berita->slug }}" required>
            </div>

            <div clas   s="mb-3">
                <label class="form-label">Isi</label>
                <textarea name="content" rows="5" class="form-control" required>{{ $berita->content }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Gambar (opsional)</label>
                <input type="file" name="image" class="form-control">
            </div>

            <button class="btn btn-primary">Update</button>
            <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
