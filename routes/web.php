<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenyewaController;

// Route untuk pengguna yang belum login
Route::middleware('guest')->group(function () {
    // Halaman registrasi
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);

    // Halaman login
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

// Route untuk pengguna yang sudah login
Route::middleware('auth')->group(function () {
    // Halaman beranda setelah login
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Logout
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});
// Route penyewa
Route::middleware('auth')->group(function () {
    // Halaman beranda setelah login
    // Route::get('/penyewa', [PenyewaController::class, 'index'])->name('penyewa');
    // Route::get('/create', [PenyewaController::class, 'create'])->name('create');
    // Route::post('/', [PenyewaController::class, 'store'])->name('store');
    
    // Logout
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::middleware('auth')->prefix('penyewa')->name('penyewa.')->group(function () {
    // Halaman utama penyewa
    Route::get('/', [PenyewaController::class, 'index'])->name('index');

    // Form tambah penyewa
    Route::get('/create', [PenyewaController::class, 'create'])->name('create');

    // Proses tambah penyewa
    Route::post('/', [PenyewaController::class, 'store'])->name('store');
});
