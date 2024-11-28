<div class="col-12 rounded-lg bg-light fixed-bottom" style="height: 8vh;">
    <div class="row">
        <a href="{{ route('siswa.home.index') }}" class="pt-1 col-3 h-100 d-flex align-items-center justify-content-center flex-column {{ Request::is('/') ? 'active' : '' }}">
            <i class="bi bi-house" style="font-size: 30px;"></i>
            <small>Home</small>
        </a>
        <a href="{{ route('siswa.absen.index') }}" class="pt-1 col-3 h-100 d-flex align-items-center justify-content-center flex-column {{ Request::is('absen') ? 'active' : '' }}">
            <i class="bi bi-calendar-check" style="font-size: 30px;"></i>
            <small>Absensi</small>
        </a>
        <a href="{{ route('siswa.histori.index') }}" class="pt-1 col-3 h-100 d-flex align-items-center justify-content-center flex-column {{ Request::is('histori') ? 'active' : '' }}">
            <i class="bi bi-clock-history" style="font-size: 30px;"></i>
            <small>Histori</small>
        </a>  
        <a href="" class="pt-1 col-3 h-100 d-flex align-items-center justify-content-center flex-column">
            <i class="bi bi-box-arrow-right" style="font-size: 30px;"></i>
            <small>LogOut</small>
        </a>
    </div>
</div>
<!-- menu End -->

       
    <!--   Core JS Files   -->
    <script src="{{ asset('js/core/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/core/popper.min.js') }}"></script>
    <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{ asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

    <!-- Chart JS -->
    <script src="{{ asset('js/plugin/chart.js/chart.min.js') }}"></script>

    <!-- jQuery Sparkline -->
    <script src="{{ asset('js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Chart Circle -->
    <script src="{{ asset('js/plugin/chart-circle/circles.min.js') }}"></script>

    <!-- Datatables -->
    <script src="{{ asset('js/plugin/datatables/datatables.min.js') }}"></script>

    <!-- Bootstrap Notify -->
    <script src="{{ asset('js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

    <!-- jQuery Vector Maps -->
    <script src="{{ asset('js/plugin/jsvectormap/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('js/plugin/jsvectormap/world.js') }}"></script>

    <!-- Sweet Alert -->
    <script src="{{ asset('js/plugin/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Kaiadmin JS -->
    <script src="{{ asset('js/kaiadmin.min.js') }}"></script>


  </body>
</html>
