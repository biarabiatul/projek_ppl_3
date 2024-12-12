@extends('layouts.materi')

@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <div class="navbar-collapse collapse">
        <div class="navbar-title">MERKURIUS</div>
        <ul class="navbar-nav navbar-align">
            <!-- Your existing nav items here -->
        </ul>
    </div>
</nav>

<div class="container">

    <!-- Div baru untuk isi materi -->
    <div class="materi-content" style="font-size: 18px; line-height: 1.8; padding: 20px;">
        <h2 style="font-size: 28px; margin-bottom: 20px;">Merkurius</h2>
         <!-- Menambahkan gambar Mars dan memastikan gambar berada di tengah -->
         <img src="assets/img/merkurius.jpeg" alt="Gambar merkurius" style="width: 50%; max-width: 400px; height: auto;" class="mx-auto d-block mb-4">
        <p style="margin-bottom: 20px;">
            Planet terdekat dengan Matahari ini bergerak cepat 
            di lintasannya. Dinamai Merkurius, seperti nama 
            dewa Romawi yang menjadi utusan para dewa yang 
            geraknya juga cepat. Oleh karena jaraknya sangat dekat dengan 
            Matahari, planet ini sulit untuk diamati dengan 
            mata telanjang. Merkurius dapat dilihat beberapa 
            saat sebelum Matahari terbit (subuh) dan setelah 
            Matahari tenggelam, sehingga ia kadang disebut 
            juga sebagai bintang fajar atau bintang malam. 
            Banyak yang mengira Merkurius adalah 
            planet terpanas dalam Tata Surya, dengan alasan 
            karena ialah yang paling dekat dengan Matahari. 
            Tetapi ternyata tidaklah demikian. Seperti yang kalian ketahui, atmosfer adalah 
            lapisan terluar planet. Setiap planet memiliki atmosfer 
            dengan perbandingan bahan penyusun yang berbeda
            beda. Perbandingan bahan penyusun ini yang 
            akan memengaruhi kemampuan atmosfer untuk 
            memerangkap energi dari Matahari. Energi yang 
            diperangkap tersebut lalu dipantulkan ke permukaan 
            planet. Semakin banyak energi yang diperangkap, 
            semakin panas suhu permukaan planet tersebut. 
            Atmosfer Merkurius yang tipis membuatnya sulit 
            menahan energi yang diterima dari Matahari, sehingga 
            suhu permukaannya tidak sepanas yang diduga.
        </p>
        
        <h3 style="font-size: 24px; margin-bottom: 15px;">Karakteristik Merkurius</h3>
        <table class="table table-bordered" style="width: 100%; font-size: 18px;">
            <tr>
                <th style="padding: 10px;">Massa</th>
                <td style="padding: 10px;"> 0,056 kali massa Bumi</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Satelit</th>
                <td style="padding: 10px;"> Tidak ada</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Diameter</th>
                <td style="padding: 10px;"> 4.878 km (setara 0,38 kali diameter Bumi)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Kandungan</th>
                <td style="padding: 10px;">Kebanyakan Helium</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Gravitasi</th>
                <td style="padding: 10px;"> 0,38 kali gravitasi Bumi</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Suhu di Permukaan</th>
                <td style="padding: 10px;"> -170°C pada malam hari dan 430°C pada siang hari </td>
            </tr>
            <tr>
                <th style="padding: 10px;">Periode Rotasi</th>
                <td style="padding: 10px;">59 hari (ukuran Bumi)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Jarak dari Matahari</th>
                <td style="padding: 10px;"> 0,39 SA (Satuan Astronomi) </td>
            </tr>
            <tr>
                <th style="padding: 10px;">Periode Revolusi</th>
                <td style="padding: 10px;">  88 hari (ukuran Bumi)</td>
            </tr>
        </table>

        <!-- Tombol navigasi dan scroll ke latihan serta game -->
        <div class="d-flex justify-content-between align-items-center mt-4">
            <a href="#" class="btn btn-secondary btn-lg">Sebelumnya</a>
            <div>
                <a href="kuis_merkurius" class="btn btn-primary btn-lg me-2">Kuis</a>
                <a href="game_merkurius" class="btn btn-success btn-lg">Mainkan Game</a>
            </div>
            <a href="venus" class="btn btn-secondary btn-lg">Selanjutnya</a>
        
    </div>
</div>
@endsection
