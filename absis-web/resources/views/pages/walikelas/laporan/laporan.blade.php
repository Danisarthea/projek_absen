@extends('components.layout')

@section('content')
<div class="container">
  <div class="page-inner">
      
      <div class="d-flex">
      <div class="col-6 p-2">
          <label for="exampleInputEmail1">Tanggal Awal</label>
          <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="dd-mm-yyyy">
      </div>
      <div class="col-6 p-2">
          <label for="exampleInputEmail1">Tanggal Akhir</label>
          <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="dd-mm-yyyy">
      </div>
      </div>
      <button class="btn btn-primary m-3">Lihat</button>      
      <div class="col-md-12">

          <div class="card">
              <div class="card-header">
                  <div class="card-title">Laporan Kehadiran</div>
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
                  <tbody>
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
                </tbody>
                </table>
                  <!-- end tabel  -->

                </div>
              </div>
      </div>
  </div>
</div>
@endsection
            