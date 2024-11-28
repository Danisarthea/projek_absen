@extends('components.layoutsiswa')

@section('content')
    <!-- header start -->
    <div class="col-12 bg-primary pb-5 d-flex align-items-center justify-content-center text-light flex-column pt-4">
      <img class="rounded-circle" src="{{ asset('img/arashmil.jpg') }}">
      <h3 class="fw-bold pt-2">Agam Munandar</h3>
      <h5 class="pb-5" style="margin-top: -10px; ">XII RPL - 2024/2025</h5>
         
  </div>
  <div class="col-12 d-flex align-items-center justify-content-center text-light flex-column px-3 pt-4">
    <div class="card bg-light p-3 col-12 mx-2 col-lg-6" style="margin-top: -90px; ">
      <div class="row">
      <div class="col-3 px-2 pb-2">
          <div class="bg-success rounded text-center text-light d-grid justify-content-center">
              <h6 class="fw-bold">Hadir</h6>
              <i class="bi bi-person-check" style="font-size: 30px; "></i>
              <small>89%</small>
          </div>
      </div>
      <div class="col-3 px-2 pb-2">
          <div class="bg-warning rounded text-center text-light d-grid justify-content-center">
              <h6 class="fw-bold">Izin</h6>
              <i class="bi bi-envelope-paper" style="font-size: 30px;"></i>
              <small>7%</small>
          </div>
      </div>
      <div class="col-3 px-2 pb-2">
          <div class="bg-warning rounded text-center text-light d-grid justify-content-center">
              <h6 class="fw-bold">Sakit</h6>
              <i class="bi bi-heart-pulse" style="font-size: 30px;"></i>
              <small>4%</small>
          </div>
      </div>
      <div class="col-3 px-2 pb-2">
          <div class="bg-danger rounded text-center text-light d-grid justify-content-center">
              <h6 class="fw-bold">Alpa</h6>
              <i class="bi bi-calendar-x" style="font-size: 30px;"></i>
              <small>0%</small>
          </div>
      </div>
  </div>
</div>
  </div>

<!-- header End -->

<!-- content start -->
<section>
<div class="col-12 col-12 d-flex align-items-center justify-content-center">
<div class="card ">
  <div class="card-header">
    <div class="card-title">History</div>
  </div>
  <div class="card-body table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Jam</th>
          <th scope="col">Ket</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Hadir</td>
          <td>01-10-24</td>
          <td>06:00:33</td>
          <td>Menunggu</td>
        </tr>
        <tr>
          <td>Sakit</td>
          <td>02-10-24</td>
          <td>06:00:33</td>
          <td>Menunggu</td>
        </tr>
        <tr>
          <td>Izin</td>
          <td>03-10-24</td>
          <td>06:00:33</td>
          <td>Menunggu</td>
        </tr>
        <tr>
          <td>Hadir</td>
          <td>04-10-24</td>
          <td>06:00:33</td>
          <td>Menunggu</td>
        </tr>
        <tr>
          <td>Hadir</td>
          <td>05-10-24</td>
          <td>06:00:33</td>
          <td>Menunggu</td>
        </tr>
        <tr>
          <td>Hadir</td>
          <td>06-10-24</td>
          <td>06:00:33</td>
          <td>Menunggu</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>
 
</section>
<!-- content End -->
@endsection
    