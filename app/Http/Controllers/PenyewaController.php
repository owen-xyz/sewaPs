<?php

namespace App\Http\Controllers;

use App\Models\Penyewaan;
use Illuminate\Http\Request;

class PenyewaController extends Controller
{
    public function index()
    {
        $penyewaans = Penyewaan::all(); // Mengambil semua data penyewaan
        return view('penyewa.index', compact('penyewaans'));
    }
    public function create()
    {
        return view('penyewa.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_penyewa' => 'required|string|max:255',
            'tanggal_sewa' => 'required|date',
            'tanggal_serah' => 'required|date|after_or_equal:tanggal_sewa',
            'lama_sewa' => 'required|integer|min:1',
            'status' => 'required|in:Selesai,Dalam Proses',
        ]);

        Penyewaan::create([
            'nama_penyewa' => $request->nama_penyewa,
            'tanggal_sewa' => $request->tanggal_sewa,
            'tanggal_serah' => $request->tanggal_serah,
            'lama_sewa' => $request->lama_sewa,
            'status' => $request->status,
        ]);

        return redirect()->route('penyewa.index')->with('success', 'Penyewa berhasil ditambahkan!');
    }
}
