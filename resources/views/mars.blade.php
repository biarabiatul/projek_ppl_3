@extends('layouts.materi')

@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <div class="navbar-collapse collapse">
        <div class="navbar-title">MARS</div>
        <ul class="navbar-nav navbar-align">
            <!-- Your existing nav items here -->
        </ul>
    </div>
</nav>

<div class="container">

    <!-- Div baru untuk isi materi -->
    <div class="materi-content" style="font-size: 18px; line-height: 1.8; padding: 20px;">
        
        <!-- Menambahkan gambar Mars dan memastikan gambar berada di tengah -->
        <img src="assets/img/mars.jpeg" alt="Gambar Mars" style="width: 50%; max-width: 400px; height: auto;" class="mx-auto d-block mb-4">

        <p style="margin-bottom: 20px;">
            Jika Venus adalah planet pertama yang berhasil dijelajahi pesawat ruang angkasa, Mars merupakan planet yang paling banyak diselidiki para ilmuwan. 
            Dari hasil penyelidikan tersebut, hingga saat ini ilmuwan memutuskan bahwa sulit untuk bisa hidup di planet ini. 
            
            Warna merah adalah ciri khas Mars. Karena 
            warna merah inilah Mars kerap disebut sebagai 
            Planet Berkarat. Dapatkah kalian menebak dari 
            mana asal nama itu? Permukaan Mars kaya akan 
            besi oksida. Besi yang teroksidasi kita sebut sebagai 
            karat. Itulah sebabnya Mars disebut Planet Berkarat.
        </p>
        
        <h3 style="font-size: 24px; margin-bottom: 15px;">Karakteristik Mars</h3>
        <table class="table table-bordered" style="width: 100%; font-size: 18px;">
            <tr>
                <th style="padding: 10px;">Massa</th>
                <td style="padding: 10px;">0,107 kali massa Bumi</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Satelit</th>
                <td style="padding: 10px;">2 (Phobos dan Deimos)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Diameter</th>
                <td style="padding: 10px;">6.794 km (setara 0,53 kali diameter Bumi)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Kandungan</th>
                <td style="padding: 10px;">Lapisan sangat tipis yang sebagian besar terdiri atas karbon dioksida</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Gravitasi</th>
                <td style="padding: 10px;">0,376 kali gravitasi Bumi</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Suhu di Permukaan</th>
                <td style="padding: 10px;">Berkisar -120°C hingga 25°C</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Periode Rotasi</th>
                <td style="padding: 10px;">1,03 hari (ukuran Bumi)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Jarak dari Matahari</th>
                <td style="padding: 10px;">1,52 SA (Satuan Astronomi)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Periode Revolusi</th>
                <td style="padding: 10px;">687 hari (ukuran Bumi)</td>
            </tr>
        </table>

        <!-- Tombol navigasi dan scroll ke latihan serta game -->
       <div class="d-flex justify-content-between align-items-center mt-4">
            <a href="bumi" class="btn btn-secondary btn-lg" style="background-color: #5a2b91; color: white;">Sebelumnya</a>
            <div>
                <a href="kuis_mars" class="btn btn-primary btn-lg me-2">Kuis</a>
                <a href="game_mars" class="btn btn-success btn-lg">Mainkan Game</a>
            </div>
            <a href="jupiter" class="btn btn-secondary btn-lg" style="background-color: #5a2b91; color: white;">Selanjutnya</a>
        
    </div>
</div>
@endsection
