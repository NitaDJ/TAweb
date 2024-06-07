@extends('layout.layout')

@section('content')
<h1 class="mb-4">Detail Buku</h1>
<table class="table">
    <tr>
        <th>Judul</th>
        <td>{{ $book->judul }}</td>
    </tr>
    <tr>
        <th>Penulis</th>
        <td>{{ $book->penulis }}</td>
    </tr>
    <tr>
        <th>Penerbit</th>
        <td>{{ $book->penerbit }}</td>
    </tr>
    <tr>
        <th>Tahun Terbit</th>
        <td>{{ $book->tahun_terbit }}</td>
    </tr>
</table>
<a href="{{ route('books.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
