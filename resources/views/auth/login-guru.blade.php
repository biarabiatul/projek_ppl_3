@extends('layouts.app')

@section('content')
<div class="form-image-container">
    <img src="{{ asset('img/login.png') }}" alt="Ilustrasi Buku dengan Planet" style="width: 400px;">
    <div class="form-container">
        <h2>Login Guru</h2>
        <form action="{{ route('login.guru') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <!-- <label for="name">Nama:</label> -->
                <input type="text" name="nip" class="form-control" placeholder="NIP" required>
            </div>
            <div class="form-group mb-3">
                <!-- <label for="password">Password:</label> -->
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</div>
@endsection
