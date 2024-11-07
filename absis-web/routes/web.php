<?php
// Admin
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KehadiranController;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Controllers\Admin\WaliController;
use App\Http\Controllers\Admin\KelasController;
// WaliKelas
use App\Http\Controllers\Wali\AntriverifikasiController;
use App\Http\Controllers\Wali\VerifikasiController;
use App\Http\Controllers\Wali\HistoryController;
use App\Http\Controllers\Wali\LaporanController;
// Siswa
use App\Http\Controllers\Siswa\AbsenController;
use App\Http\Controllers\Siswa\HadirController;
use App\Http\Controllers\Siswa\HistoriController;
use App\Http\Controllers\Siswa\SakitController;
use App\Http\Controllers\Siswa\IzinController;
use App\Http\Controllers\Siswa\HomeController;
// Login
use App\Http\Controllers\Auth\LoginController;

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

    // menu wali kelas
    Route::prefix('wali')->group(function (){
        Route::resource('dashboard', HistoryController::class)->names([
            'index' => 'wali.dashboard.index',
            'create' => 'wali.dashboard.create',
            'store' => 'wali.dashboard.store',
            'show' => 'wali.dashboard.show',
            'edit' => 'wali.dashboard.edit',
            'update' => 'wali.dashboard.update',
            'destroy' => 'wali.dashboard.destroy',
        ]);

        Route::resource('antri_verifikasi', AntriverifikasiController::class)->names([
            'index' => 'wali.antri_verifikasi.index',
            'create' => 'wali.antri_verifikasi.create',
            'store' => 'wali.antri_verifikasi.store',
            'show' => 'wali.antri_verifikasi.show',
            'edit' => 'wali.antri_verifikasi.edit',
            'update' => 'wali.antri_verifikasi.update',
            'destroy' => 'wali.antri_verifikasi.destroy',
        ]);

        Route::resource('verifikasi', VerifikasiController::class)->names([
            'index' => 'wali.verifikasi.index',
            'create' => 'wali.verifikasi.create',
            'store' => 'wali.verifikasi.store',
            'show' => 'wali.verifikasi.show',
            'edit' => 'wali.verifikasi.edit',
            'update' => 'wali.verifikasi.update',
            'destroy' => 'wali.verifikasi.destroy',
        ]);

        Route::resource('laporan', LaporanController::class)->names([
            'index' => 'wali.laporan.index',
            'create' => 'wali.laporan.create',
            'store' => 'wali.laporan.store',
            'show' => 'wali.laporan.show',
            'edit' => 'wali.laporan.edit',
            'update' => 'wali.laporan.update',
            'destroy' => 'wali.laporan.destroy',
        ]);
            // Route::get('home', [UserController::class, 'home'])->name('pages.home.home');
    });
    // end menu wali kelas


    // start menu admin 
    Route::prefix('admin')->group(function () {
        // Admin Dashboard
        Route::resource('dashboard', DashboardController::class)->names([
            'index' => 'admin.dashboard.index',
            'create' => 'admin.dashboard.create',
            'store' => 'admin.dashboard.store',
            'show' => 'admin.dashboard.show',
            'edit' => 'admin.dashboard.edit',
            'update' => 'admin.dashboard.update',
            'destroy' => 'admin.dashboard.destroy',
        ]);
    
        // Kelola data siswa 
        Route::resource('list_siswa', SiswaController::class)->names([
            'index' => 'admin.list_siswa.index',
            'create' => 'admin.list_siswa.create',
            'store' => 'admin.list_siswa.store',
            'show' => 'admin.list_siswa.show',
            'edit' => 'admin.list_siswa.edit',
            'update' => 'admin.list_siswa.update',
            'destroy' => 'admin.list_siswa.destroy',
        ]);
    
        // Additional show route for specific view with a different ID parameter
        Route::get('list_siswa/{id}', [SiswaController::class, 'show'])->name('admin.list_siswa.show');
    
        // Kelola data wali
        Route::resource('list_wali', WaliController::class)->names([
            'index' => 'admin.list_wali.index',
            'create' => 'admin.list_wali.create',
            'store' => 'admin.list_wali.store',
            'show' => 'admin.list_wali.show',
            'edit' => 'admin.list_wali.edit',
            'update' => 'admin.list_wali.update',
            'destroy' => 'admin.list_wali.destroy',
        ]);
    
        // Additional show route for specific view with a different ID parameter
        Route::get('list_wali/{id}', [WaliController::class, 'show'])->name('admin.list_wali.show');
    
        // Kelola data kelas
        Route::resource('list_kelas', KelasController::class)->names([
            'index' => 'admin.list_kelas.index',
            'create' => 'admin.list_kelas.create',
            'store' => 'admin.list_kelas.store',
            'show' => 'admin.list_kelas.show',
            'edit' => 'admin.list_kelas.edit',
            'update' => 'admin.list_kelas.update',
            'destroy' => 'admin.list_kelas.destroy',
        ]);
    
        // Data kehadiran route
        Route::get('kehadiran', [KehadiranController::class, 'index'])->name('admin.pages.kdatakehadiran.kehadiran');
    });
    
    

    // start siswa
    Route::prefix('siswa')->group(function () {
        Route::resource('/home', HomeController::class)->names([
            'index' => 'siswa.home.index',
            'create' => 'siswa.home.create',
            'store' => 'siswa.home.store',
            'show' => 'siswa.home.show',
            'edit' => 'siswa.home.edit',
            'update' => 'siswa.home.update',
            'destroy' => 'siswa.home.destroy',
        ]);

        Route::resource('/absen', AbsenController::class)->names([
            'index' => 'siswa.absen.index',
            'create' => 'siswa.absen.create',
            'store' => 'siswa.absen.store',
            'show' => 'siswa.absen.show',
            'edit' => 'siswa.absen.edit',
            'update' => 'siswa.absen.update',
            'destroy' => 'siswa.absen.destroy',
        ]);

        Route::resource('/hadir', HadirController::class)->names([
            'index' => 'siswa.hadir.index',
            'create' => 'siswa.hadir.create',
            'store' => 'siswa.hadir.store',
            'show' => 'siswa.hadir.show',
            'edit' => 'siswa.hadir.edit',
            'update' => 'siswa.hadir.update',
            'destroy' => 'siswa.hadir.destroy',
        ]);

        Route::resource('/histori', HistoriController::class)->names([
            'index' => 'siswa.histori.index',
            'create' => 'siswa.histori.create',
            'store' => 'siswa.histori.store',
            'show' => 'siswa.histori.show',
            'edit' => 'siswa.histori.edit',
            'update' => 'siswa.histori.update',
            'destroy' => 'siswa.histori.destroy',
        ]);

        Route::resource('/sakit', SakitController::class)->names([
            'index' => 'siswa.sakit.index',
            'create' => 'siswa.sakit.create',
            'store' => 'siswa.sakit.store',
            'show' => 'siswa.sakit.show',
            'edit' => 'siswa.sakit.edit',
            'update' => 'siswa.sakit.update',
            'destroy' => 'siswa.sakit.destroy',
        ]);

        Route::resource('/izin', IzinController::class)->names([
            'index' => 'siswa.izin.index',
            'create' => 'siswa.izin.create',
            'store' => 'siswa.izin.store',
            'show' => 'siswa.izin.show',
            'edit' => 'siswa.izin.edit',
            'update' => 'siswa.izin.update',
            'destroy' => 'siswa.izin.destroy',
        ]);

    });
    // end siswa

    // Login Route
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

    