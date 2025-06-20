@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Tambah Berita</h1>

        <form method="POST" action="..." enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Judul</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Isi</label>
                <textarea name="content" rows="5" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Gambar (opsional)</label>
                <input type="file" name="image" class="form-control">
            </div>


            <button class="btn btn-success">Simpan</button>
            <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
