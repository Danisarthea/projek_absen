@extends('components.layout')

@section('content') 
<div class="container"> 
    <div class="page-inner"> 
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Detail Kelas</h3>
                <h6 class="op-7 mb-2">Aplikasi Absen Siswa</h6>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">Kelas {{ $kelas->nama_kelas }}</h4>
                    <a href="{{ route('list_kelas.index') }}" class="btn btn-primary">Kembali</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama Kelas</th>
                            <td>{{ $kelas->nama_kelas }}</td>
                        </tr>
                        <tr>
                            <th>Wali Kelas</th>
                            <td>{{ $kelas->wali ? $kelas->wali->nama : 'Belum Ada' }}</td>
                        </tr>
                    </table>
                    <h5 class="mt-4">Daftar Siswa:</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th>Nama Siswa</th>
                                <th>NIS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($kelas->siswa as $siswa)
                                <tr>
                                    <td class="text-center">{{ $siswa->nama }}</td>
                                    <td class="text-center">{{ $siswa->nis }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" class="text-center">Belum ada siswa terdaftar.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
