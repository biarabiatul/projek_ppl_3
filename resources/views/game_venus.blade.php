@extends('layouts.materi')

@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <div class="navbar-collapse collapse">
        <div class="navbar-title">GAME VENUS</div>
        <ul class="navbar-nav navbar-align">
            <!-- Your existing nav items here -->
        </ul>
    </div>
</nav>

<div class="container">
    <!-- Bagian untuk game -->
    <div class="text-center" style="margin-top: 20px;">
        <h3 style="margin-bottom: 20px;">Mainkan Game</h3>
        <iframe style="max-width:100%" 
                src="https://wordwall.net/id/embed/40899160a8fb44b980cedb10de06ef53?themeId=23&templateId=3&fontStackId=0" 
                width="500" 
                height="380" 
                frameborder="0" 
                allowfullscreen>
        </iframe>
    </div>

    <!-- Tombol navigasi untuk kembali atau ke materi -->
    <div class="d-flex justify-content-between align-items-center mt-4">
        <a href="venus" class="btn btn-secondary btn-lg">Kembali ke Materi</a>
        <a href="bumi" class="btn btn-primary btn-lg">Lanjut ke Bumi</a>
    </div>
</div>
@endsection
