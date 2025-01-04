<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Menangani proses login
    public function login(Request $request)
    {
        // Validasi input login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        // Mengambil kredensial dari inputan
        $credentials = $request->only('email', 'password');

        // Mengecek kredensial dan login
        if (Auth::attempt($credentials, $request->remember)) {
            // Jika login berhasil, alihkan ke halaman utama (contoh /home)
            return redirect()->intended('/home')->with('swal', [
                'title' => 'Login Berhasil!',
                'text' => 'Selamat datang kembali, ' . Auth::user()->name,
                'icon' => 'success',
            ]);
        }

        // Jika login gagal, kembali ke form dengan error
        return back()->withErrors([
            'email' => 'Email atau password yang Anda masukkan salah.',
        ]);
    }

    // Fungsi logout (jika dibutuhkan)
    public function logout(Request $request)
    {
        Auth::logout();  // Menghapus sesi autentikasi pengguna
        $request->session()->invalidate();  // Menghapus sesi
        $request->session()->regenerateToken();  // Regenerasi token CSRF

        return redirect('/login');  // Arahkan ke halaman login setelah logout
    }
}
