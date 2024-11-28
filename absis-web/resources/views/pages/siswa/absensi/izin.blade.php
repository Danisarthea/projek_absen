@extends('components.layoutsiswa')

@section('content')
    <!-- header start -->
    <div class="col-12 bg-primary d-flex align-items-center justify-content-center text-light flex-column pt-4">
      <div class="bg-light rounded">
            <img class="" src="{{ asset('img/check.png') }}" style="height: 250px;">
      </div>       
            <h3 class="fw-bold pt-2">Izin</h3>
            <h5 class="" style="margin-top: -10px;">27-08-2024 05:58</h5>
    </div>

<!-- header End -->

<!-- content start -->
<section>
<div class="col-12 col-12 p-4">
<div class="card d-flex align-items-center">
<div class="form-group">
    <label for="fileInput">Upload Bukti</label>
        <input  class="form-control"
            type="file"
            id="fileInput"
        />
</div>
  <img class="p-3" id="previewImage" src="" style="max-width: 400px; display: none;">
</div>
<button class="btn btn-primary">Upload</button>
</div>
</section>

<script>
document.getElementById('fileInput').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const previewImage = document.getElementById('previewImage');
            previewImage.src = e.target.result;
            previewImage.style.display = 'block';
        }
        reader.readAsDataURL(file);
    }
});
</script>
@endsection
