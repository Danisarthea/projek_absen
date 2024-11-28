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
          <div class="card-header d-flex justify-content-between">
            <div class="card-title">List Siswa</div>
              <a href="{{ route('admin.list_siswa.create') }}" class="btn btn-primary">Tambah</a>
          </div>
          <div class="card-body">
          <!-- start tabel  -->
          <table class="table table-hover">
              <thead>
                <tr class="text-center">
                  <th scope="col">No</th>
                  <th scope="col"></th>
                  <th scope="col">Nama</th>
                  <th scope="col">Kelas</th>
                  <th scope="col">NIS</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($siswa as $item)
                  <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">
                      @if ($item->foto)
                        <a href="{{ Storage::url($item->foto) }}" target="blank">
                          <img src="{{ Storage::url($item->foto) }}" style="height: 50px;" class="me-3">
                        </a>
                      @endif
                    </td>
                    <td class="text-center">{{ $item->nama }}</td>
                    <td class="text-center">{{ $item->kelas->nama_kelas }}</td>
                    <td class="text-center">{{ $item->nis }}</td>
                    <td class="text-center">{{ $item->jenis_kelamin }}</td>
                    <td class="text-center">{{ $item->alamat }}</td>
                    <td class="text-center">
                      <a href="{{ route('admin.list_siswa.show', $item->id) }}" class="btn btn-info"><i class="far fa-eye"></i></a>
                      <a href="{{ route('admin.list_siswa.edit', $item->id) }}" class="btn btn-primary"><i class="far fa-edit"></i></a>
                      <form action="{{ route('admin.list_siswa.destroy', $item->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')">
                              <i class="far fa-trash-alt"></i>
                          </button>
                      </form>

                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            {!! $siswa->links() !!}
            <!-- end tabel  -->
          </div>
        </div>
      </div>
  </div>
@endsection            