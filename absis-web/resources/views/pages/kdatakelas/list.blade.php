@extends('components.layout')

@section('content')
<div class="container">
  <div class="page-inner">
    <form action="{{ route('list_kelas.store') }}" method="POST">
      @csrf
      <div class="d-flex justify-content-end align-items-center mb-3">
          <label for="nama_kelas">Tambah Kelas</label>      
          <div class="form-group col-6">
              <input type="text" class="form-control" name="nama_kelas" id="nama_kelas" placeholder="Nama Kelas">
          </div>
          <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
  </form>  
      <div class="col-md-12">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            <div class="card-title">List Kelas</div>
          </div>
          <div class="card-body">
                  
                <!-- start tabel  -->
            <table class="table table-hover">
              <thead>
                <tr class="text-center">
                  <th scope="col">No</th>
                  <th>Nama Kelas</th>
                  <th>Jumlah Siswa</th>
                  <th>Wali Kelas</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($kelas as $kel)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $kel->nama_kelas }}</td>
                        <td class="text-center">{{ $kel->siswa->count() }}</td>
                        <td class="text-center">
                            {{ $kel->wali ? $kel->wali->nama : '-' }}
                        </td>
                        <td class="text-center"></td>
                    </tr>
                @endforeach
            </tbody>
            
            </table>
            <!-- end tabel  -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>

      </div>
    </div>
  </div>
</div>
@endsection
