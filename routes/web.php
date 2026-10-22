<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;

Route::get('/', function () {
    return view('welcome');
});

// Menampilkan form
route::get('/', [PendaftaranController::class, 'create']);

// Menyimpan data
route::post('/daftar', [PendaftaranController::class, 'store'])->name('daftar.store');

// Halaman sukses setelah mendaftar
route::get('/pendaftaran/sukses/{id}', [PendaftaranController::class, 'success'])->name('daftar.success');
