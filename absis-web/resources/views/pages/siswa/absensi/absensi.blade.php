@extends('components.layoutsiswa')

@section('content')
    <!-- header start -->
    <div class="col-12 bg-primary d-flex align-items-center justify-content-center text-light flex-column pt-4">
      <div class="bg-light rounded">
            <img class="" src="{{ asset('img/check.png') }}" style="height: 250px;">
      </div>       
            <h3 class="fw-bold pt-2">Absensi  </h3>
            <h5 class="" style="margin-top: -10px;">XII RPL - 2024/2025</h5>
       </div>

<!-- header End -->

<!-- content start -->
<section>
<div class="card d-flex justify-content-center align-items-center flex-wrap col-12 col-lg-12 p-4">
<div class="card col-12 col-lg-4">
  <a href="{{ route('siswa.hadir.index') }}" class="btn btn-success d-flex justify-content-between ">
    <i class="bi bi-person-check" style="font-size: 60px; "></i>
    <h2 class="text-light pt-4" style="padding-right: 130px; font-weight: bold;">Hadir</h2>
  </a>
</div>
<div class="card col-12 col-lg-4">
  <a href="{{ route('siswa.izin.index') }}" class="btn btn-warning d-flex justify-content-between ">
    <i class="bi bi-envelope-paper" style="font-size: 60px; color: white"></i>
    <h2 class="text-light text-center pt-4" style="padding-right: 145px; font-weight: bold;" >Izin</h2>
  </a>
</div>
<div class="card col-12 col-lg-4">
  <a href="{{ route('siswa.sakit.index') }}" class="btn btn-warning d-flex justify-content-between ">
    <i class="bi bi-heart-pulse" style="font-size: 60px; color: white"></i>
    <h2 class="text-light pt-4" style="padding-right: 130px; font-weight: bold;">Sakit</h2>
  </a>
</div>
</div>
</section>
@endsection
