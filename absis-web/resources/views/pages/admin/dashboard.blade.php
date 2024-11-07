@extends('components.layout')

@section('content')
  <div class="container">
    <div class="page-inner">
      <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4" >
          <div>
              <h3 class="fw-bold mb-3">Dashboard</h3>
              <h6 class="op-7 mb-2">Aplikasi Absen Siswa</h6>
          </div>
      </div>
      <div class="col-md-12">
        <div class="col-12 col-md-11 d-flex justify-content-between" style="margin-left: 18px;">               
          <!-- start hadir -->
          <div class="col-12 col-sm-6 col-md-6 col-xl-3 mx-2">
            <div class="card card-stats bg-success card-info card-round">
              <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <div class="icon-big text-center">
                      <i class="fas fa-user-check"></i>
                    </div>
                  </div>
                  <div class="col-7 col-stats">
                    <div class="numbers">
                      <p class="card-category">Hadir</p>
                      <h4 class="card-title">1303</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end hadir -->
          <!-- start izin -->
          <div class="col-12 col-sm-6 col-md-6 col-xl-3 mx-2">
            <div class="card card-stats bg-warning card-info card-round">
              <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <div class="icon-big text-center">
                      <i class="fas fa-calendar-alt"></i>
                    </div>
                  </div>
                  <div class="col-7 col-stats">
                    <div class="numbers">
                      <p class="card-category">Izin</p>
                      <h4 class="card-title">1303</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end izin -->
          <!-- start sakit  -->
          <div class="col-12 col-sm-6 col-md-6 col-xl-3 mx-2">
            <div class="card card-stats bg-warning card-info card-round">
              <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <div class="icon-big text-center">
                      <i class="fas fa-ambulance"></i>
                    </div>
                  </div>
                  <div class="col-7 col-stats">
                    <div class="numbers">
                      <p class="card-category">Sakit</p>
                      <h4 class="card-title">1303</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end sakit  -->
          <!-- start alpa  -->
          <div class="col-12 col-sm-6 col-md-6 col-xl-3 mx-2">
            <div class="card card-stats bg-danger card-info card-round">
              <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <div class="icon-big text-center">
                      <i class="fas fa-calendar-times"></i>
                    </div>
                  </div>
                  <div class="col-7 col-stats">
                    <div class="numbers">
                      <p class="card-category">Alpa</p>
                      <h4 class="card-title">1303</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end alpa  -->
        </div>
        <div class="card">
          <div class="card-header">
              <div class="card-title">History</div>
          </div>
          <div class="card-body">
            <!-- start tabel  -->
              <table class="table table-hover">
                <thead>
                  <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                {{-- <tbody>
                  @foreach($history as $item)
                    <tr>
                      <td class="text-center">{{ $item->id }}</td>
                      <td class="text-center">{{ $item->nama }}</td>
                      <td class="text-center">{{ $item->kelas }}</td>
                      <td class="text-center">{{ $item->keterangan }}</td>
                      <td class="text-center"></td>
                      <td class="text-center"></td>
                    </tr>
                  @endforeach
                </tbody> --}}
              </table>
            <!-- end tabel  -->
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection