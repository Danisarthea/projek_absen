<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\WaliController;
use App\Http\Controllers\KelasController;
Use App\Http\Controllers\WalikelasController;

Route::get('/', function () {
    return view('welcome');
});
    // menu wali kelas
// Route::get('home', [UserController::class, 'home'])->name('pages.home.home');
Route::resource('/', WalikelasController::class);
Route::get('antri_verifikasi', [WalikelasController::class, 'antri_verifikasi'])->name('pages.verifikasi.antriverifikasi');
Route::get('verifikasi', [WalikelasController::class, 'verifikasi'])->name('pages.verifikasi.verifikasi');
Route::get('laporan', [WalikelasController::class, 'laporan'])->name('pages.laporan.laporan');
    // end menu wali kelas

    // start menu admin

    // start kelola data siswa
    Route::resource('list_siswa', SiswaController::class);


    // start kelola data wali
    Route::resource('list_wali', WaliController::class);


    // start kelola data kelas
    Route::resource('list_kelas', KelasController::class);
// Route::get('list_kelas', [KelasController::class, 'list_kelas'])->name('pages.kdatakelas.list');
// Route::get('tambahsiswa_kelas', [KelasController::class, 'tambahsiswa_kelas'])->name('pages.kdatakelas.tambahsiswa');
// Route::get('tambahwali_kelas', [KelasController::class, 'tambahwali_kelas'])->name('pages.kdatakelas.tambahwali');


    // start kelola data kehadiran
Route::get('kehadiran', [UserController::class, 'kehadiran'])->name('pages.kdatakehadiran.kehadiran');
