@extends('layouts.app')
@section('title', 'Data Absensi')
@section('content')

<div>
    <div>
        <h3>Data Absensi</h3>
        <a href="{{ route('absensi.store') }}" class="btn btn-primary mb-3">Tambah Data</a>
    </div>
    <div>
        <table class="table table-striped table-striped-columns">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Matakuliah</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($absensis as $absensi)
                <tr>
                    <td>{{ $absensi->id }}</td>
                    
                    <!-- Memanggil NIM lewat relasi mahasiswa -->
                    <td>{{ $absensi->mahasiswa->NIM ?? '-' }}</td>
                    
                    <!-- Memanggil Nama lewat relasi mahasiswa -->
                    <td>{{ $absensi->mahasiswa->name ?? '-' }}</td>
                    
                    <!-- Memanggil Nama Matakuliah lewat relasi matakuliah -->
                    <td>{{ $absensi->matakuliah->nama_matakuliah ?? '-' }}</td>
                    
                    <!-- Kolom asli dari tabel absensis -->
                    <td>{{ $absensi->tanggal_absensi }}</td>
                    <td>{{ $absensi->status_absen }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection