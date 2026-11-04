@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Data Matakuliah</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('matakuliah.update', $matakuliahs->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="kode" class="form-label">Kode</label>
                            <input type="text" class="form-control" id="kode" name="kode" value="{{ $matakuliahs->kode }}">
                        </div>
                        <div class="mb-3">
                            <label for="nama_matakuliah" class="form-label">Nama Matakuliah</label>
                            <input type="text" class="form-control" id="nama_matakuliah" name="nama_matakuliah" value="{{ $matakuliahs->nama_matakuliah }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection