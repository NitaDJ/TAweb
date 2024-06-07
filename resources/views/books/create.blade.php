@extends('layout.layout')

@section('content')
<h1 class="mb-4">Tambah Buku</h1>
<form action="{{ route('books.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="judul">Judul:</label>
        <input type="text" class="form-control" id="judul" name="judul" required>
    </div>
    <div class="form-group">
        <label for="penulis">Penulis:</label>
        <input type="text" class="form-control" id="penulis" name="penulis" required>
    </div>
    <div class="form-group">
        <label for="penerbit">Penerbit:</label>
        <input type="text" class="form-control" id="penerbit" name="penerbit" required>
    </div>
    <div class="form-group">
        <label for="tahun_terbit">Tahun Terbit:</label>
        <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
