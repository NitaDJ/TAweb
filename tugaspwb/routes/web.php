<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini Anda dapat mendaftarkan rute web untuk aplikasi Anda. Rute ini
| dimuat oleh RouteServiceProvider dalam grup yang berisi grup "web".
| Sekarang buat sesuatu yang hebat!
|
*/

// Rute untuk menampilkan daftar buku
Route::get('/books', [BookController::class, 'index'])->name('books.index');

// Rute untuk menampilkan form penambahan buku baru
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');

// Rute untuk menyimpan buku baru
Route::post('/books', [BookController::class, 'store'])->name('books.store');

// Rute untuk menampilkan detail buku berdasarkan ID
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');

// Rute untuk menampilkan form pengeditan buku berdasarkan ID
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');

// Rute untuk memperbarui data buku berdasarkan ID
Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update');

// Rute untuk menghapus buku berdasarkan ID
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');

Route::resource('siswa', BookController::class)->middleware('isLogin');
Route::get('sesi', [BookController::class, 'index'])->middleware('isTamu');
Route::post('sesi/login', [BookController::class, 'login'])->middleware('isTamu');
Route::get('sesi/logout', [BookController::class, 'logout']);
Route::get('sesi/register', [BookController::class, 'register'])->middleware('isTamu');
Route::post('sesi/register', [BookController::class, 'create'])->middleware('isTamu');
