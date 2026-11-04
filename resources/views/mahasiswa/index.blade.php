@extends('layouts.app')
@section('title', 'Data Mahasiswa')
@section('content')

<div>
    <div>
        <h3>Daftar Mahasiswa</h3>
        <a href="{{ route('mahasiswa.store') }}">Tambah Data</a>
    </div>
    <div>
        <table class="table table-striped table-striped-columns">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Angkatan</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswas as $mahasiswa)
                <tr>
                <td scope="row">{{$mahasiswa['id']}}</td>
                <td>{{$mahasiswa['NIM']}}</td>
                <td>{{$mahasiswa['name']}}</td>
                <td>{{$mahasiswa['tempat_lahir']}}</td>
                <td>{{$mahasiswa['tanggal_lahir']}}</td>
                <td>{{$mahasiswa['jurusan']}}</td>
                <td>{{$mahasiswa['angkatan']}}</td>
                <td>
         
                </td>
                </tr>
                @endforeach
            </tbody>
            </table>
    </div>
</div>

@endsection