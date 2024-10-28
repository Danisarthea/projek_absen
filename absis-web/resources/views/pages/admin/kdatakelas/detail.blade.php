@extends('components.layout')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4>Detail Kelas: {{ $kelas->nama_kelas }}</h4>
                <a href="{{ route('list_kelas.index') }}" class="btn btn-primary">Kembali</a>
            </div>
            <div class="card-body col-6">
                <table class="table table-hover">
                    <thead>
                        <tr class="text-center">
                            <th>Nama Siswa</th>
                            <th>Wali Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($kelas->siswa as $index => $siswa)
                            <tr>
                                <td class="text-center">{{ $siswa->nama }} ({{ $siswa->nis }})</td>
                                @if ($index == 0)
                                    <td class="text-center" rowspan="{{ $kelas->siswa->count() }}">
                                        {{ $kelas->wali ? $kelas->wali->nama : 'Belum Ada' }}
                                    </td>
                                @endif
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center">Belum ada siswa terdaftar.</td>
                                <td class="text-center">{{ $kelas->wali ? $kelas->wali->nama : 'Belum Ada' }}</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                
                
                
                {{-- <h5>Wali Kelas: {{ $kelas->wali ? $kelas->wali->nama : 'Belum Ada' }}</h5>
                <hr>
                <h5>Daftar Siswa:</h5>
                <ul>
                    @forelse ($kelas->siswa as $siswa)
                        <li>{{ $siswa->nama }} ({{ $siswa->nis }})</li>
                    @empty
                        <p>Belum ada siswa terdaftar.</p>
                    @endforelse
                </ul> --}}
            </div>
        </div>
    </div>
</div>
@endsection
