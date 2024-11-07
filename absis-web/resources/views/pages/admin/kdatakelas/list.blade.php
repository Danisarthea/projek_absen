@extends('components.layout')

@section('content')
<div class="container">  
  <div class="page-inner"> 
    <div class="d-flex justify-content-between"> 
      <div>
          <h3 class="fw-bold mb-3"></h3>
          <h6 class="op-7 mb-2">Aplikasi Absen Siswa</h6>
      </div>
      <!-- Form Tambah / Edit Kelas -->
      <form action="{{ isset($kelasEdit) ? route('admin.list_kelas.update', $kelasEdit->id) : route('admin.list_kelas.store') }}" method="POST"> 
        @csrf
        @if(isset($kelasEdit))
            @method('PUT')
        @endif
        <div class="d-flex justify-content-end align-items-center mb-3">
            <label for="nama_kelas">{{ isset($kelasEdit) ? 'Edit Kelas' : 'Tambah Kelas' }}</label>      
            <div class="form-group col-6">
                <input type="text" class="form-control" name="nama_kelas" id="nama_kelas" placeholder="Nama Kelas"
                       value="{{ isset($kelasEdit) ? $kelasEdit->nama_kelas : '' }}">
            </div>
            <button type="submit" class="btn btn-primary">{{ isset($kelasEdit) ? 'Update' : 'Tambah' }}</button>
        </div>
      </form>  
    </div> 

    <div class="col-md-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between">
          <div class="card-title">List Kelas</div>
        </div>
        <div class="card-body">
          <!-- Tabel List Kelas -->
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
                  <td class="text-center">
                    <a href="{{ route('admin.list_kelas.show', $kel->id) }}" class="btn btn-info"><i class="far fa-eye"></i></a>
                    <a href="{{ route('admin.list_kelas.edit', $kel->id) }}" class="btn btn-primary"><i class="far fa-edit"></i></a>
                    <form action="{{ route('admin.list_kelas.destroy', $kel->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>                      
                </tr>
              @endforeach
            </tbody>
          </table>
          <!-- End Tabel List Kelas -->
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
