@extends('layouts.main')

@section('title', 'Tambah Penyewa')

@section('content')
<div class="container mt-4">
    <h5 class="mb-4">Tambah Penyewa</h5>
    <form action="{{ route('penyewa.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_penyewa" class="form-label">Nama Penyewa</label>
            <input type="text" name="nama_penyewa" id="nama_penyewa" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_sewa" class="form-label">Tanggal Sewa</label>
            <input type="date" name="tanggal_sewa" id="tanggal_sewa" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_serah" class="form-label">Tanggal Serah</label>
            <input type="date" name="tanggal_serah" id="tanggal_serah" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="lama_sewa" class="form-label">Lama Sewa (Hari)</label>
            <input type="number" name="lama_sewa" id="lama_sewa" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select" required>
                <option value="Selesai">Selesai</option>
                <option value="Dalam Proses">Dalam Proses</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Tambah</button>
        <a href="{{ route('penyewa.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
