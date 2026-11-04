@extends('layouts.app')

@section('content')

<div>
    <div>
        <h3>Tambah Data Matakuliah</h3>
    </div>
    <div>
        <form action="{{ route('matakuliah.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="kode" class="form-label">Kode Matakuliah</label>
                <input type="text" class="form-control" id="kode" name="kode">
            </div>
            <div class="mb-3">
                <label for="nama_matakuliah" class="form-label">Nama Matakuliah</label>
                <input type="text" class="form-control" id="nama_matakuliah" name="nama_matakuliah">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection