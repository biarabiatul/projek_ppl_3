@extends('layouts.materi')

@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <div class="navbar-collapse collapse">
        <div class="navbar-title">GAME JUPITER</div>
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
                src="https://wordwall.net/id/embed/09005d1f7e7846db993ecc8a00fa32d9?themeId=23&templateId=10&fontStackId=0" 
                width="500" 
                height="380" 
                frameborder="0" 
                allowfullscreen>
        </iframe>
    </div>

    <!-- Tombol navigasi untuk kembali atau ke materi -->
    <div class="d-flex justify-content-between align-items-center mt-4">
        <a href="jupiter" class="btn btn-secondary btn-lg">Kembali ke Materi</a>
        <a href="saturnus" class="btn btn-primary btn-lg">Lanjut ke Saturnus</a>
    </div>
</div>
@endsection
