<?php
// Admin
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Controllers\Admin\WaliController;
use App\Http\Controllers\Admin\KelasController;
use App\Http\Controllers\LaporanController as ControllersLaporanController;
// WaliKelas
Use App\Http\Controllers\Wali\WalikelasController;
use App\Http\Controllers\Wali\HistoryController;
use App\Http\Controllers\Wali\LaporanController;


use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
    // menu wali kelas
// Route::get('home', [UserController::class, 'home'])->name('pages.home.home');
Route::resource('/', HistoryController::class);
Route::get('antri_verifikasi', [WalikelasController::class, 'antri_verifikasi'])->name('pages.verifikasi.antriverifikasi');
Route::get('verifikasi', [WalikelasController::class, 'verifikasi'])->name('pages.verifikasi.verifikasi');
Route::resource('laporan', LaporanController::class);

    // end menu wali kelas

    // start menu admin

    // start kelola data siswa
    Route::resource('list_siswa', SiswaController::class);


    // start kelola data wali
    Route::resource('list_wali', WaliController::class);


    // start kelola data kelas
    Route::resource('list_kelas', KelasController::class);


    // start kelola data kehadiran
    Route::get('kehadiran', [UserController::class, 'kehadiran'])->name('pages.kdatakehadiran.kehadiran');