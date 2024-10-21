@extends('components.layout')

@section('content')
<div class="container">
  <div class="page-inner">
      <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4" >
          <div>
              <h3 class="fw-bold mb-3"></h3>
              <h6 class="op-7 mb-2">Aplikasi Absen Siswa</h6>
          </div>
      </div>
      <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Antri Verifikasi</div>
                </div>
                <div class="card-body">

                <!-- start tabel  -->
                <table class="table table-hover">
                    <thead>
                      <tr class="text-center">
                        <th scope="col">Nama</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                        <img src="img/jm_denis.jpg" class="rounded-circle me-3" style="height: 30px;">  
                        Daniswara Arthea Pragustama</td>
                        <td class="text-center">XII RPL</td>
                        <td class="text-center">Izin</td>
                        <td class="text-center">20-08-24</td>
                        <td class="text-center">06.23</td>
                        <td class="text-center"><a href="{{ route('pages.verifikasi.verifikasi') }}" class="btn btn-primary">Lihat</a></td>
                      </tr>
                      <tr>
                        <td>
                        <img src="img/mlane.jpg" class="rounded-circle me-3" style="height: 30px;">    
                        Afriza David Fauzi</td>
                        <td class="text-center">XII RPL</td>
                        <td class="text-center">Sakit</td>
                        <td class="text-center">20-08-24</td>
                        <td class="text-center">05.34</td>
                        <td class="text-center"><a href="{{ route('pages.verifikasi.verifikasi') }}" class="btn btn-primary">Lihat</a></td>
                      </tr>
                      <tr>
                        <td>
                        <img src="img/sauro.jpg" class="rounded-circle me-3" style="height: 30px;">    
                        Agam Munandar</td>
                        <td class="text-center">XII RPL</td>
                        <td class="text-center">Izin</td>
                        <td class="text-center">20-08-24</td>
                        <td class="text-center">07.33</td>
                        <td class="text-center"><a href="{{ route('pages.verifikasi.verifikasi') }}" class="btn btn-primary">Lihat</a></td>
                      </tr>
                      <tr>
                        <td>
                        <img src="img/talha.jpg" class="rounded-circle me-3" style="height: 30px;">    
                        Agung Herdiansyah</td>
                        <td class="text-center">XII RPL</td>
                        <td class="text-center">Izin</td>
                        <td class="text-center">20-08-24</td>
                        <td class="text-center">06.33</td>
                        <td class="text-center"><a href="{{ route('pages.verifikasi.verifikasi') }}" class="btn btn-primary">Lihat</a></td>
                      </tr>
                      <tr>
                        <td>
                        <img src="img/arashmil.jpg" class="rounded-circle me-3" style="height: 30px;">    
                        Eshan Ghulam Zakiya</td>
                        <td class="text-center">XII RPL</td>
                        <td class="text-center">Sakit</td>
                        <td class="text-center">20-08-24</td>
                        <td class="text-center">07.33</td>
                        <td class="text-center"><a href="{{ route('pages.verifikasi.verifikasi') }}" class="btn btn-primary">Lihat</a></td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- end tabel  -->

                </div>
              </div>
  </div>
</div>   
@endsection


