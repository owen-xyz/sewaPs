<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // Method untuk menampilkan form registrasi
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Method untuk menangani data registrasi
    public function register(Request $request)
    {
        // Validasi data form
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',  // Pastikan ada field 'password_confirmation' di form
        ]);

        // Hash password sebelum menyimpan ke database
        $hashedPassword = Hash::make($request->password);

        // Simpan data pengguna baru ke database
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $hashedPassword,
        ]);

        // Setelah registrasi berhasil, alihkan ke halaman login
        return redirect()->route('login')->with('success', 'Registrasi berhasil!');
    }
}
