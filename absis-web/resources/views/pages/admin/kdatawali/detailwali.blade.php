@extends('components.layout')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Detail Wali Kelas</h3>
                <h6 class="op-7 mb-2">Aplikasi Absen Siswa</h6>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">{{ $wali->nama }}</h4>
                    <a href="{{ route('admin.list_wali.index') }}" class="btn btn-primary">Kembali</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama</th>
                            <td>{{ $wali->nama }}</td>
                        </tr>
                        <tr>
                            <th>Wali Kelas</th>
                            <td>{{ $wali->kelas->nama_kelas }}</td>
                        </tr>
                        <tr>
                            <th>Kontak</th>
                            <td>{{ $wali->kontak }}</td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>{{ $wali->jenis_kelamin }}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>{{ $wali->alamat }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
