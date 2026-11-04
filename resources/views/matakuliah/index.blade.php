@extends('layouts.app')
@section('title', 'Data Matakuliah')
@section('content')

<div>
    <div>
        <h3>Data Matakuliah</h3>
        <a href="{{ route('matakuliah.store') }}" class="btn btn-primary mb-3">Tambah Data</a>
    </div>
    <div>
        <table class="table table-striped table-striped-columns">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode Matakuliah</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS</th>
                    <th>Semester</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($matakuliahs as $matakuliah)
                <tr>
                    <td>{{ $matakuliah->id }}</td>
                    <td>{{ $matakuliah->kode_matakuliah }}</td>
                    <td>{{ $matakuliah->nama_matakuliah }}</td>
                    <td>{{ $matakuliah->sks }}</td>
                    <td>{{ $matakuliah->semester }}</td>
                    <td>
                        <a href="{{ route('matakuliah.edit', $matakuliah->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('matakuliah.destroy', $matakuliah->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection