@extends('layouts.app')
@section('title', 'Form Kehadiran Absensi')
@section('content')

<div class="container mt-4">
    <div class="card shadow-sm p-4">
        <h3 class="mb-4">Input Kehadiran Mahasiswa</h3>

        <!-- Form Filter / Bagian Atas (DatePicker & ComboBox Mata Kuliah) -->
        <form action="#" method="GET" class="row g-3 mb-4">
            <div class="col-md-4">
                <label for="tanggal" class="form-label fw-bold">Tanggal Absensi</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ date('Y-m-d') }}">
            </div>
            <div class="col-md-4">
                <label for="matakuliah_id" class="form-label fw-bold">Mata Kuliah</label>
                <select class="form-select" id="matakuliah_id" name="matakuliah_id">
                    <option selected disabled>Pilih Mata Kuliah</option>
                    @foreach ($matakuliahs as $mk)
                        <option value="{{ $mk->id }}">{{ $mk->nama_matakuliah }}</option>
                    @endforeach
                </select>
            </div>
        </form>

        <!-- Tabel Daftar Mahasiswa & Status Kehadiran -->
        <form action="{{ route('absensi.store') }}" method="POST">
            @csrf
            <table class="table align-middle">
                <thead>
                    <tr class="text-muted">
                        <th style="width: 5%;">No</th>
                        <th style="width: 45%;">Mahasiswa</th>
                        <th style="width: 20%;">Kehadiran</th>
                        <th style="width: 30%; text-align: right;">Status (H / A / I / S)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswas as $index => $mahasiswa)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>
                            <div class="fw-bold text-uppercase">{{ $mahasiswa->name }}</div>
                            <small class="text-muted">{{ $mahasiswa->NIM }}</small>
                            <!-- Hidden input untuk menyimpan ID mahasiswa saat disubmit -->
                            <input type="hidden" name="absensi[{{ $index }}][mahasiswa_id]" value="{{ $mahasiswa->id }}">
                        </td>
                        <td>
                            <!-- Label badge status sementara (opsional/kondisional) -->
                            <span class="badge bg-light text-secondary">-</span>
                        </td>
                        <td class="text-end">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="absensi[{{ $index }}][status_absen]" value="H" id="hadir_{{ $index }}">
                                <label class="form-check-label" for="hadir_{{ $index }}">H</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="absensi[{{ $index }}][status_absen]" value="A" id="absen_{{ $index }}">
                                <label class="form-check-label" for="absen_{{ $index }}">A</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="absensi[{{ $index }}][status_absen]" value="I" id="izin_{{ $index }}">
                                <label class="form-check-label" for="izin_{{ $index }}">I</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="absensi[{{ $index }}][status_absen]" value="S" id="sakit_{{ $index }}">
                                <label class="form-check-label" for="sakit_{{ $index }}">S</label>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="text-end mt-3">
                <button type="submit" class="btn btn-primary px-4">Simpan Absensi</button>
            </div>
        </form>
    </div>
</div>

@endsection