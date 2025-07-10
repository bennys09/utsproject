@extends('layouts.layout')
@section('content')

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Daftar Mahasiswa</h4>
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">Tambah Mahasiswa</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Kelas</th>
                    <th>Prodi</th>
                    <th>Angkatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            @forelse($mahasiswa as $mhs)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->kelas }}</td>
                    <td>{{ $mhs->prodi }}</td>
                    <td class="text-center">{{ $mhs->angkatan }}</td>
                    <td class="text-center">
                        <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form method="POST" action="{{ route('mahasiswa.destroy', $mhs->id) }}" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center text-muted">Belum ada data mahasiswa.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
