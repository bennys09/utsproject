

@extends('layouts.layout')
@section('content')


<form method="POST" action="{{ route('mahasiswa.store') }}">
    @csrf
    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control">
    </div>
    <div class="mb-3">
        <label>NIM</label>
        <input type="text" name="nim" class="form-control">
    </div>
    <div class="mb-3">
        <label>Kelas</label>
        <input type="text" name="kelas" class="form-control">
    </div>
    <div class="mb-3">
    <label>Prodi</label>
    <select name="prodi" class="form-control" required>
        <option value="">-- Pilih Prodi --</option>
        <option value="Sistem Informasi">sistem informasi</option>
        <option value="Teknik Informatika">teknik informatika</option>
    </select>
</div>
    <div class="mb-3">
        <label>Angkatan</label>
        <input type="number" name="angkatan" class="form-control">
    </div>
    <button class="btn btn-success">Simpan</button>
</form>

@endsection