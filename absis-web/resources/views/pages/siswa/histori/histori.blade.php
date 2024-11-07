@extends('components.layoutsiswa')

@section('content')
    <!-- header start -->
    <div class="col-12 bg-primary d-flex align-items-center justify-content-center text-light flex-column p-3 pt-4">
      <div class="card p-3 col-12 mx-2 col-lg-6" style="margin-bottom: 15px; ">
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
              <div class="col-6">
                  <label for="exampleInputEmail1">Tanggal Awal</label>
                  <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="dd-mm-yyyy">
              </div>
              <div class="col-6">
                  <label for="exampleInputEmail1">Tanggal Akhir</label>
                  <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="dd-mm-yyyy">
              </div>
              <button class="btn btn-primary mt-3 col-12">Lihat</button>
          </div>
      </div>
  </div>
  <!-- header End -->

  <!-- content start -->
  <section>
  <div class="col-12 col-12 d-flex align-items-center justify-content-center">
      <div class="card">
          <div class="card-header">
            <div class="card-title">History</div>
          </div>
          <div class="card-body table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>
  </div>
  
</section>
@endsection
