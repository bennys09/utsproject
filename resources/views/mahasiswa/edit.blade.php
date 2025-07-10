@extends('layouts.layout')

@section('title', 'Edit Mahasiswa')

@section('content')
<form method="POST" action="{{ route('mahasiswa.update', $mahasiswa->id) }}">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" value="{{ old('nama', $mahasiswa->nama) }}">
    </div>
    <div class="mb-3">
        <label>NIM</label>
        <input type="text" name="nim" class="form-control" value="{{ old('nim', $mahasiswa->nim) }}">
    </div>
    <div class="mb-3">
        <label>Kelas</label>
        <input type="text" name="kelas" class="form-control" value="{{ old('kelas', $mahasiswa->kelas) }}">
    </div>
     <div class="mb-3">
    <label>Prodi</label>
    <select name="prodi" class="form-control" required>
        <option value="{{ old('prodi', $mahasiswa->prodi) }}">-- Pilih Prodi --</option>
        <option value="Sistem Informasi">sistem informasi</option>
        <option value="Teknik Informatika">teknik informatika</option>
    </select>
</div>
    <div class="mb-3">
        <label>Angkatan</label>
        <input type="number" name="angkatan" class="form-control" value="{{ old('angkatan', $mahasiswa->angkatan) }}">
    </div>
    <button class="btn btn-primary">Update</button>
</form>
@endsection
