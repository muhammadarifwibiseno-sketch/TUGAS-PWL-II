<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\KrsController;
use App\Http\Controllers\JadwalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('pages.beranda');
});

Route::get('/dosen', [DosenController::class, 'index'])->name('dosen');
Route::get('/create-dosen', [DosenController::class, 'create'])->name('form_add_dosen');
Route::post('/store-dosen', [DosenController::class, 'store'])->name('store_dosen');

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/create-mahasiswa', [MahasiswaController::class, 'create'])->name('form_add_mahasiswa');
Route::post('/store-mahasiswa', [MahasiswaController::class, 'store'])->name('store_mahasiswa');

Route::get('/matakuliah', [MatakuliahController::class, 'index'])->name('matakuliah');

Route::get('/krs', [KrsController::class, 'index'])->name('krs');

Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal');

Route::get('/show/{id}/detail-dosen',[DosenController::class, 'show'])->name('detail_dosen');

Route::get('/edit/{id}/edit-dosen',[DosenController::class, 'edit'])->name('edit_dosen');
Route::put('/update/{id}/update-dosen',[DosenController::class, 'update'])->name('update_dosen');

Route::delete('/delete/{id}/delete-dosen',[DosenController::class, 'destroy'])->name('delete_dosen');

Route::get('/show/{id}/detail-mahasiswa',[MahasiswaController::class, 'show'])->name('detail_mahasiswa');

Route::get('/edit/{id}/edit-mahasiswa',[MahasiswaController::class, 'edit'])->name('edit_mahasiswa');
Route::put('/update/{id}/update-mahasiswa',[MahasiswaController::class, 'update'])->name('update_mahasiswa');

Route::delete('/delete/{id}/delete-mahasiswa',[MahasiswaController::class, 'destroy'])->name('delete_mahasiswa');

