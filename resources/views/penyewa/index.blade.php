@extends('layouts.main')

@section('title', 'Penyewa')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h5>Data Penyewaan</h5>
    <!-- Tombol Tambah Penyewa -->
    <a href='{{ route('penyewa.create') }}' class="btn btn-primary">
        <i class="fa fa-plus"></i> Tambah Penyewa
    </a>
</div>

<div class="table-container bg-white p-4 rounded shadow-sm">
    <table class="table table-hover mt-3">
        <thead class="table-dark">
            <tr>
                <th>Nama Penyewa</th>
                <th>Tanggal Sewa</th>
                <th>Tanggal Serah</th>
                <th>Lama Sewa</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penyewaans as $penyewaan)
            <tr>
                <td>{{ $penyewaan->nama_penyewa }}</td>
                <td>{{ $penyewaan->tanggal_sewa }}</td>
                <td>{{ $penyewaan->tanggal_serah }}</td>
                <td>{{ $penyewaan->lama_sewa }}</td>
                <td>
                    <span class="badge {{ $penyewaan->status == 'Selesai' ? 'bg-success' : 'bg-warning' }}">
                        {{ $penyewaan->status }}
                    </span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
