@extends('layouts.main')

@section('title', 'Beranda Rental PS')


@section('content')
<div class="welcome-message alert alert-success">
    Selamat datang kembali, {{ Auth::user()->name ?? 'Pengguna' }}! Anda berada di <a href="#">halaman beranda</a>.
</div>

<div class="table-container bg-white p-4 rounded shadow-sm">
    <div><h3>Data penyewa</h3></div>
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
