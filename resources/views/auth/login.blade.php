@extends('layouts.app')

@section('title', 'Login')

@section('header')
    <!-- Menambahkan logo di bagian atas header -->
@endsection

@section('content')
    <!-- Form Login -->
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <div class="mb-3 position-relative">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <input type="password" id="password" name="password" class="form-control" required>
                    <span class="input-group-text bg-dark border-0">
                        <i class="fa fa-eye icon-eye" id="togglePassword"></i>
                    </span>
                </div>
            </div>
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember">
            <label class="form-check-label" for="remember">Ingat Saya</label>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </div>
    </form>

    <div class="mt-3 text-center">
        <p>Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a></p>
    </div>
@endsection
