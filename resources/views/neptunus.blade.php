@extends('layouts.materi')

@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <div class="navbar-collapse collapse">
        <div class="navbar-title">NEPTUNUS</div>
        <ul class="navbar-nav navbar-align">
            <!-- Your existing nav items here -->
        </ul>
    </div>
</nav>

<div class="container">

    <!-- Div baru untuk isi materi -->
    <div class="materi-content" style="font-size: 18px; line-height: 1.8; padding: 20px;">
        <h2 style="font-size: 28px; margin-bottom: 20px;">NEPTUNUS</h2>
        <img src="img/neptunus.png" alt="Gambar Neptunus" style="width: 50%; max-width: 400px; height: auto;" class="mx-auto d-block mb-4">

        <p style="margin-bottom: 20px;">
            Ini dia planet terjauh dari Matahari. Namanya 
            Neptunus. Jaraknya dengan Matahari 30 kali jarak 
            Matahari ke Bumi. Penemuan Neptunus cukup unik 
            jika dibandingkan dengan planet lainnya. Jika planet 
            lain ditemukan dengan menggunakan teleskop, 
            Neptunus ditemukan secara matematis terlebih 
            dahulu, sebelum kemudian ada yang menelitinya. 
            Neptunus memiliki 5 cincin utama dan 4 busur 
            cincin yang tersusun dari gumpalan debu. Ilmuwan 
            menduga, terbentuknya cincin dan busur cincin ini 
            disebabkan adanya gaya gravitasi dari satelit-satelit 
            yang dimiliki Neptunus. 
        
        <h3 style="font-size: 24px; margin-bottom: 15px;">Karakteristik Neptunus</h3>
        <table class="table table-bordered" style="width: 100%; font-size: 18px;">
            <tr>
                <th style="padding: 10px;">Massa</th>
                <td style="padding: 10px;">17,15 kali massa Bumi</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Satelit</th>
                <td style="padding: 10px;">  14 buah satelit dan 5 cincin</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Diameter</th>
                <td style="padding: 10px;"> 49.528 km (setara 3,88 kali 
                diameter Bumi)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Kandungan Penyusun Atmosfer</th>
                <td style="padding: 10px;"> Hidrogen, helium, dengan 
kecepatan angin lebih dari 600 
km/jam</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Gravitasi</th>
                <td style="padding: 10px;"> 1,135 kali gravitasi Bumi</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Suhu di Permukaan</th>
                <td style="padding: 10px;">-220°C</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Periode Rotasi</th>
                <td style="padding: 10px;"> 16 jam 7 menit (ukuran Bumi)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Jarak dari Matahari</th>
                <td style="padding: 10px;">  30,1 SA (Satuan Astronomi)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Periode Revolusi</th>
                <td style="padding: 10px;"> 165 tahun (ukuran Bumi)</td>
            </tr>
        </table>

        <!-- Tombol untuk scroll ke latihan dan game -->
        <div style="margin-top: 30px;">
            <a href="jupiter-latihan" class="btn btn-primary">Ke Latihan</a>
            <a href="jupiter-game" class="btn btn-info">Ke Game</a>
        </div>

</div>
@endsection
