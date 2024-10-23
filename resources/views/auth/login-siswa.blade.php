@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center form-image-container">
    <!-- Bagian gambar -->
    <div class="image-container">
        <img src="{{ asset('img/login.png') }}" alt="Ilustrasi Buku dengan Planet" style="width: 400px;">
    </div>

    <!-- Bagian form login -->
    <div class="form-container ms-4">
        <h2 class="text-center">Masuk Akun</h2>
        <form action="{{ route('login.siswa') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <input type="text" name="nisn" class="form-control" placeholder="NISN" required>
            </div>
            <div class="form-group mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100" style="background: linear-gradient(90deg, #6A5ACD, #4B0082);">Masuk</button>
            <div class="text-center mt-3">
                <p>Belum punya akun? <a href="{{ route('register.siswa') }}">Register</a></p>
            </div>
        </form>
    </div>
</div>
@endsection
