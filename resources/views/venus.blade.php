@extends('layouts.materi')

@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <div class="navbar-collapse collapse">
        <div class="navbar-title">VENUS</div>
        <ul class="navbar-nav navbar-align">
            <!-- Your existing nav items here -->
        </ul>
    </div>
</nav>

<div class="container">

    <!-- Div baru untuk isi materi -->
    <div class="materi-content" style="font-size: 18px; line-height: 1.8; padding: 20px;">
        <h2 style="font-size: 28px; margin-bottom: 20px;">Venus</h2>
        <p style="margin-bottom: 20px;">
            Planet yang terletak di urutan kedua terdekat dari 
            Matahari ini merupakan planet terpanas di Tata Surya. 
            Gerak rotasi Venus berlawanan arah dengan ketujuh planet lainnya. Ia berputar dari timur ke 
            barat, gerakan ini disebut gerakan retrograde. Permukaan Venus sulit diamati dengan teleskop. 
            Hal ini disebabkan tebalnya lapisan atmosfer yang 
            menyelimutinya. Lapisan atmosfer yang tebal dengan 
            kandungan karbon dioksida yang sangat tinggi yang 
            menyebabkan suhu permukaan Venus terpanas di 
            antara planet lainnya. Lapisan ini memerangkap 
            energi dari Matahari, dan menyebarkannya ke 
            seluruh permukaan planet. 
            Venus merupakan planet pertama yang berhasil 
            dijelajahi pesawat ruang angkasa, tepatnya pada 
            tahun 1962. Berbagai temuan didapatkan dari 
            eksplorasi berbagai pesawat ruang angkasa setelah 
            itu. Ilmuwan percaya pada satu waktu di masa lalu, 
            air mengalir di planet ini. Meski demikian, mereka 
            semua yakin tidak ada makhluk hidup (makhluk 
            hidup seperti yang kita kenal) dapat hidup di suhu 
            ekstrim dan awan asam yang sangat pekat di Venus.
        </p>
        
        <h3 style="font-size: 24px; margin-bottom: 15px;">Karakteristik Venus</h3>
        <table class="table table-bordered" style="width: 100%; font-size: 18px;">
            <tr>
                <th style="padding: 10px;">Massa</th>
                <td style="padding: 10px;">0,815 kali massa Bumi</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Satelit</th>
                <td style="padding: 10px;"> Tidak ada</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Diameter</th>
                <td style="padding: 10px;">12.103 km (setara 0,95 kali diameter Bumi)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Kandungan</th>
                <td style="padding: 10px;">7 Lapisan setebal 80 km yang 
                    terdiri atas karbon dioksida 
                    dengan sebagian uap air. Awan 
                    mengandung tetesan asam 
                    sulfat pekat.</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Gravitasi</th>
                <td style="padding: 10px;"> 0,9 kali gravitasi Bumi</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Suhu di Permukaan</th>
                <td style="padding: 10px;"> 460°C </td>
            </tr>
            <tr>
                <th style="padding: 10px;">Periode Rotasi</th>
                <td style="padding: 10px;"> 243 hari (ukuran Bumi)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Jarak dari Matahari</th>
                <td style="padding: 10px;"> 0,72 SA (Satuan Astronomi) (Satuan Astronomi)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Periode Revolusi</th>
                <td style="padding: 10px;"> 225 hari (ukuran Bumi)</td>
            </tr>
        </table>

        <!-- Tombol untuk scroll ke latihan dan game -->
        <div style="margin-top: 30px;">
            <a href="#" class="btn btn-primary">Ke Latihan</a>
            <a href="#" class="btn btn-info">Ke Game</a>
        </div>

</div>
@endsection
