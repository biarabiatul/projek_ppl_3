@extends('layouts.materi')

@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <div class="navbar-collapse collapse">
        <div class="navbar-title">URANUS</div>
        <ul class="navbar-nav navbar-align">
            <!-- Your existing nav items here -->
        </ul>
    </div>
</nav>

<div class="container">

    <!-- Div baru untuk isi materi -->
    <div class="materi-content" style="font-size: 18px; line-height: 1.8; padding: 20px;">

        <img src="img/uranus.png" alt="Gambar Uranus" style="width: 50%; max-width: 400px; height: auto;" class="mx-auto d-block mb-4">
        <p style="margin-bottom: 20px;">
            Saat pertama kali ditemukan melalui teleskop, 
            Uranus sempat dianggap sebagai komet atau 
            bintang. Cincin yang mengitarinya berjumlah 13 
            buah dengan gradasi warna dimulai dari yang paling 
            gelap yang terletak di bagian dalam. Uranus berotasi 
            seperti Venus, dari barat ke timur, namun ia berotasi 
            menyamping. Itu sebabnya, Uranus disebut juga 
            Planet Samping.
        </p>
        
        <h3 style="font-size: 24px; margin-bottom: 15px;">Karakteristik Uranus</h3>
        <table class="table table-bordered" style="width: 100%; font-size: 18px;">
            <tr>
                <th style="padding: 10px;">Massa</th>
                <td style="padding: 10px;">14,54 kali massa Bumi</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Satelit</th>
                <td style="padding: 10px;"> 27 buah satelit dan 13 cincin</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Diameter</th>
                <td style="padding: 10px;">51.200 km (setara 4.01 kali 
                diameter Bumi)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Kandungan Penyusun Atmosfer</th>
                <td style="padding: 10px;">Hidrogen, helium, dan sangat bergejolak, dengan kecepatan angin lebih dari 600 km/jam</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Gravitasi</th>
                <td style="padding: 10px;"> 0,903 kali gravitasi Bumi  </td>
            </tr>
            <tr>
                <th style="padding: 10px;">Suhu di Permukaan</th>
                <td style="padding: 10px;">-220°C</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Periode Rotasi</th>
                <td style="padding: 10px;">17 jam 14 menit (ukuran Bumi)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Jarak dari Matahari</th>
                <td style="padding: 10px;"> 19,2 SA (Satuan Astronomi)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Periode Revolusi</th>
                <td style="padding: 10px;"> 84 tahun (ukuran Bumi)</td>
            </tr>
        </table>

         <!-- Tombol navigasi dan scroll ke latihan serta game -->
         <div class="d-flex justify-content-between align-items-center mt-4">
            <a href="saturnus" class="btn btn-secondary btn-lg" style="background-color: #5a2b91; color: white;">Sebelumnya</a>
            <div>
                <a href="kuis_uranus" class="btn btn-primary btn-lg me-2">Kuis</a>
                <a href="game_uranus" class="btn btn-success btn-lg">Mainkan Game</a>
            </div>
            <a href="neptunus" class="btn btn-secondary btn-lg" style="background-color: #5a2b91; color: white;">Selanjutnya</a>
        </div>

</div>
@endsection
