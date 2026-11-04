<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\MatakuliahController;

Route::get('/', function () {
    return view('layouts.app');
});

// Route Mahasiswa
Route::get('mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('mahasiswa/{id}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');
Route::get('mahasiswa/{id}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::put('mahasiswa/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::delete('mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');

// Route Absensi
Route::get('absensi', [AbsensiController::class, 'index'])->name('absensi.index');
Route::get('absensi/create', [AbsensiController::class, 'create'])->name('absensi.create');
Route::post('absensi', [AbsensiController::class, 'store'])->name('absensi.store');
Route::get('absensi/{id}', [AbsensiController::class, 'show'])->name('absensi.show');
Route::get('absensi/{id}/edit', [AbsensiController::class, 'edit'])->name('absensi.edit');
Route::put('absensi/{id}', [AbsensiController::class, 'update'])->name('absensi.update');
Route::delete('absensi/{id}', [AbsensiController::class, 'destroy'])->name('absensi.destroy');

// Route Matakuliah
Route::get('matakuliah', [MatakuliahController::class, 'index'])->name('matakuliah.index');
Route::get('matakuliah/create', [MatakuliahController::class, 'create'])->name('matakuliah.create');
Route::post('matakuliah', [MatakuliahController::class, 'store'])->name('matakuliah.store');
Route::get('matakuliah/{id}', [MatakuliahController::class, 'show'])->name('matakuliah.show');
Route::get('matakuliah/{id}/edit', [MatakuliahController::class, 'edit'])->name('matakuliah.edit');
Route::put('matakuliah/{id}', [MatakuliahController::class, 'update'])->name('matakuliah.update');
Route::delete('matakuliah/{id}', [MatakuliahController::class, 'destroy'])->name('matakuliah.destroy');

