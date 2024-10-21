<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="<?php echo e(asset('img/2.png')); ?>"
      type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="<?php echo e(asset('js/plugin/webfont/webfont.min.js')); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/fonts.min.css')); ?>">
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
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/plugins.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/kaiadmin.min.css')); ?>" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="<?php echo e(asset('css/demo.css')); ?>" />
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
              <img
                src="<?php echo e(asset('img/2.png')); ?>"
                alt="navbar brand"
                class="navbar-brand"    
                height="40"
              />
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
          <!-- End Logo Header -->
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
              <li class="nav-item <?php echo e(\Route::is('index') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('index')); ?>">
                    <i class="fas fa-home"></i>
                  <span class="sub-item">Home</span>  
                </a>
              </li>
              <li class="nav-item <?php echo e(\Route::is('pages.verifikasi.*') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('pages.verifikasi.antriverifikasi')); ?>">
                  <i class="fas fa-check"></i>
                  <span class="sub-item">Verifikasi</span>
                  <span class="badge badge-secondary">1</span>
                </a>
              </li>
              <li class="nav-item <?php echo e(\Route::is('pages.laporan.*') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('pages.laporan.laporan')); ?>">
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
              <li class="nav-item <?php echo e(\Route::is('kelola_siswa.*') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('list_siswa.index')); ?>">
                  <i class="fas fa-user"></i>
                  <span class="sub-item">Data Siswa</span>
                </a>
              </li><li class="nav-item <?php echo e(\Route::is('pages.kdatawali.*') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('list_wali.index')); ?>">
                  <i class="fas fa-user-tie"></i>
                  <span class="sub-item">Data Wali Kelas</span>
                </a>
              </li><li class="nav-item <?php echo e(\Route::is('pages.kdatakelas.*') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('pages.kdatakelas.list')); ?>">
                  <i class="fas fa-chalkboard-teacher"></i>
                  <span class="sub-item">Data Kelas</span>
                </a>
              </li><li class="nav-item <?php echo e(\Route::is('pages.kdatakehadiran.*') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('pages.kdatakehadiran.kehadiran')); ?>">
                  <i class="fas fa-clipboard-list"></i>
                  <span class="sub-item">Data Kehadiran</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar --><?php /**PATH C:\laragon\www\absis-web\resources\views\components\sidebar.blade.php ENDPATH**/ ?>