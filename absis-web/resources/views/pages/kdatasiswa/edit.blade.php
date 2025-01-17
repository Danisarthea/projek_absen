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
              <div class="card-title">Edit Data | <b>{{ $siswa->nama }}</b></div>
              <a href="{{ route('list_siswa.index') }}" class="btn btn-primary">Kembali</a>
            </div>
            <div class="card-body">
              @if (session()->has('pesan'))
                  <div class="alert alert-info" role="alert">
                      {{ session('pesan') }}
                  </div>
              @endif
              <form class="col-6" action="/list_siswa/{{ $siswa->id }}" method="POST" enctype="multipart/form-data">
                @method('put')
                  @csrf
                  <div class="form-group">
                      <label for="foto">Foto Siswa</label>
                      <input type="file" id="foto" class="form-control @error('foto') is-invalid @enderror" name="foto">
                      <span>{{ $errors->first('foto') }}</span>
                      <img src="{{ Storage::url($siswa->foto) }}" style="height:100px" class="img-thumbnail mt-2">
                  </div>
                  <div class="form-group">
                      <label for="nama">Nama Siswa</label>
                      <input type="text" id="nama" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') ?? $siswa->nama }}">
                      <span>{{ $errors->first('nama') }}</span>
                  </div>
                  <div class="form-group">
                      <label for="kelas">Kelas</label>
                      <input type="text" id="kelas" class="form-control @error('kelas') is-invalid @enderror" name="kelas" value="{{ old('kelas') ?? $siswa->kelas }}">
                      <span>{{ $errors->first('kelas') }}</span>
                  </div>
                  <div class="form-group">
                      <label for="nis">Nis</label>
                      <input type="number" id="nis" class="form-control @error('nis') is-invalid @enderror" name="nis" value="{{ old('nis') ?? $siswa->nis }}">
                      <span>{{ $errors->first('nis') }}</span>
                  </div>
                  <div class="form-group d-flex flex-column">
                      <label for="jenis_kelamin">Jenis Kelamin</label>
                      <div>
                      <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" id="laki_laki" name="jenis_kelamin" value="laki-laki" {{ old('jenis_kelamin') ?? $siswa->jenis_kelamin === 'laki-laki' ? 'checked' : '' }}>
                          <label for="no_pasien">Laki-laki</label>
                      </div>
                      <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" id="perempuan" name="jenis_kelamin" value="perempuan" {{ old('jenis_kelamin') ?? $siswa->jenis_kelamin === 'perempuan' ? 'checked' : '' }}>
                          <label for="no_pasien">Perempuan</label>
                      </div>
                  </div>
                      <span>{{ $errors->first('jenis_kelamin') }}</span>
                  </div>
                  <div class="form-group">
                      <label for="no_pasien">Alamat</label>
                      <input type="text" id="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') ?? $siswa->alamat }}">
                      <span>{{ $errors->first('alamat') }}</span>
                  </div>
                  <button type="submit" class="btn btn-primary mt-3 ms-3">Edit</button>
              </form>
            </div>
          </div>
                </div>
        </div>
    </div>
</div>
@endsection