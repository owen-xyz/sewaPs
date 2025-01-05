@extends('layouts.app')

@section('title', 'Register')

@section('header')
<!-- Menambahkan logo di bagian atas header -->
@endsection

@section('content')
<!-- Form Registrasi -->
<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Nama:</label>
        <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
        @error('name')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
        @error('email')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <input type="password" id="password" name="password" class="form-control" required>
                    <span class="input-group-text bg-dark border-0">
                        <i class="fa fa-eye icon-eye" id="togglePassword"></i>
                    </span>
                </div>
        @error('password')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Konfirmasi Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-primary w-100">Daftar</button>
    </div>
</form>

<div class="mt-3 text-center">
    <p>Sudah punya akun? <a href="{{ route('login') }}">Masuk di sini</a></p>
</div>
@endsection