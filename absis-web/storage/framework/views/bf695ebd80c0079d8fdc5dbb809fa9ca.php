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
              <li class="nav-item <?php echo e(\Route::is('pages.kdatasiswa.*') ? 'active' : ''); ?>">
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
                <a href="<?php echo e(route('list_kelas.index')); ?>">
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
      <!-- End Sidebar -->





      

      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="index.html" class="logo">
                <img
                  src="<?php echo e(asset('img/LOGO.png')); ?>"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
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
          <!-- Navbar Header -->
          <nav
            class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
          >
            <div class="container-fluid">
              
    
              <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                <li class="nav-item topbar-user dropdown hidden-caret">
                  <a
                    class="dropdown-toggle profile-pic"
                    data-bs-toggle="dropdown"
                    href="#"
                    aria-expanded="false"
                  >
                    <div class="avatar-sm">
                      <img
                        src="<?php echo e(asset('img/profile.jpg')); ?>"
                        alt="..."
                        class="avatar-img rounded-circle"
                      />
                    </div>
                    
                    <span class="profile-username">
                      <span class="fw-bold">Danisarthea</span>
                    </span>
                  </a>
                  <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                      <li>
                        <div class="user-box">
                          <div class="avatar-lg">
                            <img
                              src="<?php echo e(asset('img/profile.jpg')); ?>"
                              alt="image profile"
                              class="avatar-img rounded"
                            />
                          </div>
                          <div class="u-text">
                            <h4>Arthea12</h4>
                            <p class="text-muted">Admin</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="dropdown-divider"></div>
                        <a type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#mLogOut">Logout</a>
                      </li>
                    </div>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>
    
        <!-- Button trigger modal -->
    
    <!-- Button trigger modal -->
    
    
    <!-- Modal -->
    <div class="modal fade" id="mLogOut" tabindex="-1" aria-labelledby="mLogOut" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">LogOut</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Serius nih mau LogOut???
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
        <a href="../auth/login.php" type="button" class="btn btn-primary">LogOut</a>
      </div>
    </div>
    </div>
    </div>

    

    <?php echo $__env->yieldContent('content'); ?>

    

    <footer class="footer">
      <div class="container-fluid d-flex justify-content-between">
        
        <div class="copyright">
          2024, made with <i class="fa fa-heart heart text-danger"></i> by
          <a href="http://www.themekita.com">SMKS PASUNDAN SUBANG</a>
        </div>
        <div>
          versi 0.0.0
        </div>
      </div>
    </footer>
  </div>
  </div>
  <!--   Core JS Files   -->
  <script src="<?php echo e(asset('js/core/jquery-3.7.1.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/core/popper.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/core/bootstrap.min.js')); ?>"></script>
  
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
  
  <!-- jQuery Scrollbar -->
  <script src="<?php echo e(asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')); ?>"></script>
  
  <!-- Chart JS -->
  <script src="<?php echo e(asset('js/plugin/chart.js/chart.min.js')); ?>"></script>
  
  <!-- jQuery Sparkline -->
  <script src="<?php echo e(asset('js/plugin/jquery.sparkline/jquery.sparkline.min.js')); ?>"></script>
  
  <!-- Chart Circle -->
  <script src="<?php echo e(asset('js/plugin/chart-circle/circles.min.js')); ?>"></script>
  
  <!-- Datatables -->
  <script src="<?php echo e(asset('js/plugin/datatables/datatables.min.js')); ?>"></script>
  
  <!-- Bootstrap Notify -->
  <script src="<?php echo e(asset('js/plugin/bootstrap-notify/bootstrap-notify.min.js')); ?>"></script>
  
  <!-- jQuery Vector Maps -->
  <script src="<?php echo e(asset('js/plugin/jsvectormap/jsvectormap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/plugin/jsvectormap/world.js')); ?>"></script>
  
  <!-- Sweet Alert -->
  <script src="<?php echo e(asset('js/plugin/sweetalert/sweetalert.min.js')); ?>"></script>
  
  <!-- Kaiadmin JS -->
  <script src="<?php echo e(asset('js/kaiadmin.min.js')); ?>"></script>
  </body>
  </html>

  
<?php /**PATH C:\laragon\www\absis-web\resources\views/components/layout.blade.php ENDPATH**/ ?>