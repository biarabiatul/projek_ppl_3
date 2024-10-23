@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center form-image-container">
    <!-- Bagian gambar atau background bisa disesuaikan, mirip dengan login -->
    <div class="form-container">
        <h2 class="text-center">Register Siswa</h2>
        <form action="{{ route('register.siswa') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <!-- <label for="name">Nama:</label> -->
                <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required>
            </div>
            <div class="form-group mb-3">
                <!-- <label for="nisn">NISN:</label> -->
                <input type="text" name="nisn" class="form-control" placeholder="NISN" required>
            </div>
            <div class="form-group mb-3">
                <!-- <label for="kelas">Kelas:</label> -->
                <input type="text" name="kelas" class="form-control" placeholder="Kelas" required>
            </div>
            <div class="form-group mb-3">
                <!-- <label for="password">Password:</label> -->
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-group mb-3">
                <!-- <label for="password_confirmation">Konfirmasi Password:</label> -->
                <input type="password" name="password_confirmation" class="form-control" placeholder="Konfirmasi Password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100" style="background: linear-gradient(90deg, #6A5ACD, #4B0082);">Register</button>
        </form>
    </div>
</div>
@endsection
