@extends('components.layoutsiswa')

@section('content')
    <!-- header start -->
    <div class="col-12 bg-primary d-flex align-items-center justify-content-center text-light flex-column pt-4">
      <div class="bg-light rounded">
            <img class="" src="{{ asset('img/check.png') }}" style="height: 250px;">
      </div>       
            <h3 class="fw-bold pt-2">Sakit</h3>
            <h5 class="" style="margin-top: -10px;">27-08-2024 05:58</h5>
    </div>

<!-- header End -->

<!-- content start -->
<section>
<div class="col-12 col-12 p-4">
<div class="card">
<div class="form-group">
    <label for="exampleFormControlFile1">Upload Bukti</label>
        <input
            type="file"
            class="form-control"
            id="exampleFormControlFile1"
        />
</div>
</div>
<div class="card">
<a href="" class="btn">
  <i class="bi bi-heart-pulse" style="font-size: 120px;"></i>
  <h5>Sakit</h5>
</a>
</div>
</div>
</section>
@endsection
