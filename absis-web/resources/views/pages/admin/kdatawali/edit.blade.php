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
                  <div class="card-title">Edit Data | <b>{{ $wali->nama }}</b></div>
                  <a href="{{ route('admin.list_wali.index') }}" class="btn btn-primary">Kembali</a>
                </div>
                <div class="card-body">
                  @if (session()->has('pesan'))
                      <div class="alert alert-info" role="alert">
                          {{ session('pesan') }}
                      </div>
                  @endif
                  <form class="col-6" action="{{ route('admin.list_wali.update', $wali->id) }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                      @csrf
                      <div class="form-group">
                          <label for="nama">Nama</label>
                          <input type="text" id="nama" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') ?? $wali->nama }}">
                          <span>{{ $errors->first('nama') }}</span>
                      </div>
                      <div class="form-group">
                        <label for="wali_kelas">Wali Kelas</label>
                        <select id="wali_kelas" name="wali_kelas" class="form-control @error('wali_kelas') is-invalid @enderror" required>
                            <option value="" disabled>Pilih Kelas</option> <!-- Placeholder option -->
                            @foreach ($kelas as $kel) <!-- Loop through the classes -->
                                <option value="{{ $kel->id }}" {{ (old('wali_kelas') ?? $wali->wali_kelas) == $kel->id ? 'selected' : '' }}>
                                    {{ $kel->nama_kelas }} <!-- Use the class name here -->
                                </option>
                            @endforeach
                        </select>
                        <span>{{ $errors->first('wali_kelas') }}</span>
                    </div>
                    
                      <div class="form-group">
                          <label for="kontak">Kontak</label>
                          <input type="number" id="kontak" class="form-control @error('kontak') is-invalid @enderror" name="kontak" value="{{ old('kontak') ?? $wali->kontak }}">
                          <span>{{ $errors->first('kontak') }}</span>
                      </div>
                      <div class="form-group d-flex flex-column">
                          <label for="jenis_kelamin">Jenis Kelamin</label>
                          <div>
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" id="laki_laki" name="jenis_kelamin" value="laki-laki" {{ old('jenis_kelamin') ?? $wali->jenis_kelamin === 'laki-laki' ? 'checked' : '' }}>
                              <label for="no_pasien">Laki-laki</label>
                          </div>
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" id="perempuan" name="jenis_kelamin" value="perempuan" {{ old('jenis_kelamin') ?? $wali->jenis_kelamin === 'perempuan' ? 'checked' : '' }}>
                              <label for="no_pasien">Perempuan</label>
                          </div>
                      </div>
                          <span>{{ $errors->first('jenis_kelamin') }}</span>
                      </div>
                      <div class="form-group">
                          <label for="no_pasien">Alamat</label>
                          <input type="text" id="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') ?? $wali->alamat }}">
                          <span>{{ $errors->first('alamat') }}</span>
                      </div>
                      <button type="submit" class="btn btn-primary mt-3 ms-3">Edit</button>
                  </form>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection