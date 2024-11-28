@extends('components.layout') 
 
@section('content') 
<div class="container"> 
  <div class="page-inner"> 
      <div class="col-md-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <div class="card-title">Tambah Siswa</div>
                  <a href="{{ route('pages.kdatakelas.list') }}" class="btn btn-primary">Kembali</a>
                </div>
                <div class="card-body">
                  <form action="{{ route('siswa.addToClass') }}" method="POST" class="col-6">
                      @csrf
                      <div class="form-group">
                          <label for="searchSiswa">Cari Nama Siswa</label>
                          <input type="text" id="searchSiswa" class="form-control" placeholder="Cari nama siswa...">
                      </div>
                      <div class="form-group mt-3">
                          <label for="siswaSelect">Nama Siswa</label>
                          <select class="form-select" id="siswaSelect" name="siswa_id">
                              <option value="" selected disabled>Pilih Siswa...</option>
                              @foreach ($siswas as $siswa)
                                  <option value="{{ $siswa->id }}">{{ $siswa->nama }} ({{ $siswa->nis }})</option>
                              @endforeach
                          </select>
                      </div>
                      <input type="hidden" name="kelas_id" value="{{ $kelas->id }}">
                      <button type="submit" class="btn btn-primary mt-3">Tambah</button>
                  </form>
                </div>
                <table class="table table-hover mt-5"> 
                    <thead> 
                      <tr class="text-center"> 
                        <th scope="col">No</th> 
                        <th scope="col">Nama</th> 
                        <th scope="col">NIS</th> 
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($kelas->siswa as $index => $siswa)
                      <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                          <td class="text-center">{{ $siswa->nama }}</td>
                          <td class="text-center">{{ $siswa->nis }}</td>
                          <td class="text-center">
                          <form action="{{ route('siswa.removeFromClass', $siswa->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                          </form>
                          </td>
                      </tr> 
                      @endforeach
                    </tbody>
                  </table> 
              </div> 
      </div> 
  </div> 
</div> 
@endsection


<script>
  document.getElementById('searchSiswa').addEventListener('keyup', function() {
      let searchValue = this.value.toLowerCase();
      let siswaOptions = document.querySelectorAll('#siswaSelect option');

      siswaOptions.forEach(option => {
          let siswaName = option.textContent.toLowerCase();
          if (siswaName.includes(searchValue)) {
              option.style.display = 'block';
          } else {
              option.style.display = 'none';
          }
      });
  });
</script>

