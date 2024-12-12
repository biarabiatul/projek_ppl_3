@extends('layouts.materi')

@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <div class="navbar-collapse collapse">
        <div class="navbar-title">JUPITER</div>
        <ul class="navbar-nav navbar-align">
            <!-- Your existing nav items here -->
        </ul>
    </div>
</nav>

<div class="container">

    <!-- Div untuk isi materi -->
    <div class="materi-content" style="font-size: 18px; line-height: 1.8; padding: 20px;">
        <h2 style="font-size: 28px; margin-bottom: 20px;">Jupiter</h2>

        <!-- Menambahkan gambar Jupiter dan memastikan gambar berada di tengah -->
        <img src="assets/img/jupiter.jpg" alt="Gambar Jupiter" style="width: 50%; max-width: 400px; height: auto;" class="mx-auto d-block mb-4">

        <p style="margin-bottom: 20px;">
            Sampai hari ini, Jupiter adalah planet terbesar di Tata Surya kita. Ukurannya lebih dari dua kali ketujuh planet disatukan. 
            Jika dibandingkan dengan menggambang Bumi seukuran buah anggur, maka Jupiter sebesar bola basket. Jupiter, seperti juga 
            planet lain, tidaklah ideal untuk kehidupan manusia. Meski demikian, ilmuwan menemukan bahwa beberapa satelit Jupiter 
            memiliki lautan.
        </p>
        
        <h3 style="font-size: 24px; margin-bottom: 15px;">Karakteristik Jupiter</h3>
        <table class="table table-bordered" style="width: 100%; font-size: 18px;">
            <tr>
                <th style="padding: 10px;">Mass</th>
                <td style="padding: 10px;">318 kali massa Bumi</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Satelit</th>
                <td style="padding: 10px;">79 buah satelit dan 4 cincin</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Diameter</th>
                <td style="padding: 10px;">142,984 km (sekitar 11,21 kali diameter Bumi)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Kandungan</th>
                <td style="padding: 10px;">84% hidrogen dan 15% helium</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Gravitasi</th>
                <td style="padding: 10px;">2,53 kali gravitasi Bumi</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Suhu di Permukaan</th>
                <td style="padding: 10px;">-110°C</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Periode Rotasi</th>
                <td style="padding: 10px;">9 jam 55 menit (ukuran Bumi)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Jarak dari Matahari</th>
                <td style="padding: 10px;">5,2 SA (Satuan Astronomi)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Periode Revolusi</th>
                <td style="padding: 10px;">11,9 tahun (ukuran Bumi)</td>
            </tr>
        </table>

        <!-- Tombol navigasi dan scroll ke latihan serta game -->
       <div class="d-flex justify-content-between align-items-center mt-4">
            <a href="mars" class="btn btn-secondary btn-lg">Sebelumnya</a>
            <div>
                <a href="kuis_jupiter" class="btn btn-primary btn-lg me-2">Kuis</a>
                <a href="game_jupiter" class="btn btn-success btn-lg">Mainkan Game</a>
            </div>
            <a href="saturnus" class="btn btn-secondary btn-lg">Selanjutnya</a>

    </div>
</div>
@endsection
