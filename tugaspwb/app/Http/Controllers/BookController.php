<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Tampilkan daftar buku
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    // Tampilkan form untuk menambah buku
    public function create()
    {
        return view('books.create');
    }

    // Simpan buku baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|integer',
        ]);

        Book::create($request->all());
        return redirect()->route('books.index')
                         ->with('success', 'Buku berhasil ditambahkan');
    }

    // Tampilkan detail buku
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    // Tampilkan form untuk mengedit buku
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    // Update data buku
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|integer',
        ]);

        $book->update($request->all());
        return redirect()->route('books.index')
                         ->with('success', 'Buku berhasil diperbarui');
    }

    // Hapus buku
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')
                         ->with('success', 'Buku berhasil dihapus');
    }
}
