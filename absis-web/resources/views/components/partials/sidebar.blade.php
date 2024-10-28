<!DOCTYPE html>
<html lang="en"> 
  <head> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
    <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="{{ asset('img/2.png') }}" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ asset('js/plugin/webfont/webfont.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/fonts.min.css') }}">
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/kaiadmin.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/demo.css') }}" />
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
              <img src="{{ asset('img/2.png') }}" alt="navbar brand" class="navbar-brand" height="40" />
              <h3 class="text-light" style="padding-top: 10px; padding-left: 8px;">Absis</h3>
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-section">
                <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section">Wali Kelas</h4>
              </li>
              <li class="nav-item {{ \Route::is('index') ? 'active' : '' }}">
                <a href="{{ route('index') }}">
                  <i class="fas fa-home"></i>
                  <span class="sub-item">Home</span>  
                </a>
              </li>
              <li class="nav-item {{ \Route::is('pages.verifikasi.*') ? 'active' : '' }}">
                <a href="{{ route('pages.verifikasi.antriverifikasi') }}">
                  <i class="fas fa-check"></i>
                  <span class="sub-item">Verifikasi</span>
                  <span class="badge badge-secondary">1</span>
                </a>
              </li>
              <li class="nav-item {{ \Route::is('laporan.*') ? 'active' : '' }}">
                <a href="{{ route('laporan.index') }}">
                  <i class="fas fa-book"></i>
                  <span class="sub-item">Laporan Kehadiran</span>
                </a>
              </li>

              <li class="nav-section">
                <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section">Admin</h4>
              </li>
              <li class="nav-item {{ \Route::is('list_siswa.*') ? 'active' : '' }}">
                <a href="{{ route('list_siswa.index') }}">
                  <i class="fas fa-user"></i>
                  <span class="sub-item">Data Siswa</span>
                </a>
              </li>
              <li class="nav-item {{ \Route::is('list_wali.*') ? 'active' : '' }}">
                <a href="{{ route('list_wali.index') }}">
                  <i class="fas fa-user-tie"></i>
                  <span class="sub-item">Data Wali Kelas</span>
                </a>
              </li>
              <li class="nav-item {{ \Route::is('list_kelas.*') ? 'active' : '' }}">
                <a href="{{ route('list_kelas.index') }}">
                  <i class="fas fa-chalkboard-teacher"></i>
                  <span class="sub-item">Data Kelas</span>
                </a>
              </li>
              <li class="nav-item {{ \Route::is('pages.kdatakehadiran.*') ? 'active' : '' }}">
                <a href="{{ route('pages.kdatakehadiran.kehadiran') }}">
                  <i class="fas fa-clipboard-list"></i>
                  <span class="sub-item">Data Kehadiran</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->
