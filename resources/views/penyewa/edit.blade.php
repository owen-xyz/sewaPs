@extends('layouts.main')

@section('title', 'Beranda Rental PS')


@section('content')
<div class="welcome-message alert alert-success">
    Selamat datang kembali, {{ Auth::user()->name ?? 'Pengguna' }}! Anda berada di <a href="#">halaman beranda</a>.
</div>

<div class="table-container bg-white p-4 rounded shadow-sm">
    <h5>Data Penyewaan</h5>
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
            <tr>
                <td>John Doe</td>
                <td>2024-12-19</td>
                <td>2024-12-20</td>
                <td>1 Hari</td>
                <td><span class="badge bg-success">Selesai</span></td>
            </tr>
            <tr>
                <td>Jane Doe</td>
                <td>2024-12-18</td>
                <td>2024-12-19</td>
                <td>1 Hari</td>
                <td><span class="badge bg-warning">Dalam Proses</span></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
