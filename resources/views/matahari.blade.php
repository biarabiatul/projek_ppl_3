@extends('layouts.materi')

@section('container')
<nav class="navbar navbar-expand-lg navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <div class="collapse navbar-collapse">
        <span class="navbar-title" style="font-size: 20px; font-weight: bold;">MATAHARI</span>
        <ul class="navbar-nav ms-auto">
            <!-- Tambahkan nav item di sini jika diperlukan -->
        </ul>
    </div>
</nav>

<div class="container mt-4">
    <!-- Konten Materi -->
    <div class="materi-content" style="font-size: 18px; line-height: 1.8;">
        <!-- Embed Model Sketchfab menggantikan gambar matahari -->
        <div class="sketchfab-embed-wrapper" style="text-align: center;">
            <iframe title="Sun" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/9ef1c68fbb944147bcfcc891d3912645/embed" style="width: 100%; height: 500px;"> </iframe>
            <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;">
                <a href="https://sketchfab.com/3d-models/sun-9ef1c68fbb944147bcfcc891d3912645?utm_medium=embed&utm_campaign=share-popup&utm_content=9ef1c68fbb944147bcfcc891d3912645"></a> <i>Matahari</i>
            </p>
        </div>
        <p style="margin-bottom: 20px;"> 
            Adakah kehidupan di Bumi ini yang tidak membutuhkan Matahari? Apa yang membuat Matahari begitu istimewa bagi Bumi? Dengan perkembangan teknologi saat ini, ilmuwan dapat mengenal Matahari lebih dekat dan lebih akrab. Mari pelajari bintang besar yang menjadi benda langit terpenting dalam kehidupan di Bumi.
        </p>
        <h3 style="font-size: 24px; margin-bottom: 15px;">Karakteristik Matahari</h3>
        <table class="table table-bordered" style="width: 100%; font-size: 18px;">
            <tr>
                <th style="padding: 10px;">Massa</th>
                <td style="padding: 10px;"> 333.400 kali massa Bumi</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Diameter</th>
                <td style="padding: 10px;">1.392.000 km (109 kali diameter Bumi)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Gravitasi</th>
                <td style="padding: 10px;">28 kali gravitasi Bumi</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Suhu di Permukaan</th>
                <td style="padding: 10px;"> 4.500-2.000.000°C (rata-rata suhu 6.000°)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Periode Rotasi</th>
                <td style="padding: 10px;"> Ekuator 26 hari, Kutub 37 hari</td>
            </tr>
        </table>
        <p style="margin-bottom: 20px;">
            Beberapa karakteristik Matahari yang dapat diamati dengan teleskop surya khusus dari Bumi adalah sebagai berikut.
        </p>

        <!-- Karakteristik Matahari -->
        <h3 style="font-size: 24px; margin-bottom: 15px;">1. Karakteristik Matahari</h3>
        <p style="margin-bottom: 20px;">
            Sebagai bintang yang paling dekat dengan Bumi, Matahari memegang peranan yang sangat penting. Tidak hanya sebagai bintang terdekat, Matahari juga menjadi benda langit paling terang dan paling besar di Tata Surya.
        </p>
        
        <ol type="a">
            <li><h4 style="font-size: 20px; margin-bottom: 10px;">Bintik Matahari</h4>
                <p style="margin-bottom: 20px;">Yaitu cekungan di permukaan Matahari yang terlihat lebih gelap karena memiliki suhu beberapa ribu derajat lebih rendah dibandingkan suhu di sekitarnya.</p></li>
            <li><h4 style="font-size: 20px; margin-bottom: 10px;">Suar surya</h4>
                <p style="margin-bottom: 20px;">Yaitu ledakan atau semburan yang terjadi di atmosfer Matahari. Suar ini melepaskan sejumlah besar energi. Meski dalam jumlah energi yang kecil, cukup untuk menyebabkan gangguan pada alat komunikasi seluler, radio dan televisi di Bumi.</p></li>
            <li><h4 style="font-size: 20px; margin-bottom: 10px;">Prominensa Matahari</h4>
                <p style="margin-bottom: 20px;">yaitu bagian Matahari yang menyerupai lidah api di permukaannya, mulai dari lapisan fotosfer hingga korona.</p></li>
            <li><h4 style="font-size: 20px; margin-bottom: 10px;">Angin Matahari</h4>
                <p style="margin-bottom: 20px;">dibentuk oleh aliran partikel yang dipancarkan Matahari secara terus menerus.</p></li>
        </ol>

        <h3 style="font-size: 24px; margin-bottom: 15px;">2. Gerhana Matahari</h3>
        <p style="margin-bottom: 20px;">
            Gerhana matahari adalah peristiwa ketika bulan berada di antara bumi dan matahari sehingga bayangan bulan jatuh ke permukaan bumi. Gerhana matahari terjadi karena pergerakan posisi matahari, bumi, dan bulan. Berikut adalah jenis-jenis gerhana matahari:
        </p>
        
        <ol type="a">
            <li><h4 style="font-size: 20px; margin-bottom: 10px;">Gerhana matahari total</h4>
                <p style="margin-bottom: 20px;">Terjadi ketika bulan sepenuhnya menutupi matahari, sehingga langit menjadi gelap. Gerhana matahari total hanya bisa dilihat dari wilayah tertentu di bumi.</p></li>
            <li><h4 style="font-size: 20px; margin-bottom: 10px;">Gerhana matahari cincin</h4>
                <p style="margin-bottom: 20px;">Terjadi ketika bulan hanya menutup sebagian cahaya matahari, sehingga terlihat seperti memiliki cincin cahaya.</p></li>
            <li><h4 style="font-size: 20px; margin-bottom: 10px;">Gerhana matahari sebagian</h4>
                <p style="margin-bottom: 20px;">Terjadi ketika bulan hanya menutup sebagian dari matahari.</p></li>
        </ol>
        <p>
            Fenomena Gerhana Matahari ini hanya terjadi pada waktu-waktu tertentu. Simak ilustrasi Gerhana Matahari pada gambar 3D di bawah ini! geser cursor mu untuk melihat perubahannya!
        </p>
        <!-- Gambar Gerhana Matahari digantikan dengan embed -->
        <div class="sketchfab-embed-wrapper" style="text-align: center;">
            <iframe title="Solar Eclipse" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/b11efc4ad12d470695ab3a363e430f1f/embed" style="width: 100%; height: 500px;"> </iframe>
            <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;"><i>Gerhana Matahari<i></p>
        </div>


        <div class="exercise-section" style="background-color: #ffff; padding: 20px; border-radius: 10px; margin-top: 40px;">        
            <form action="/submit-answer" method="POST">
                @csrf
        
         <!-- Bagian Latihan atau Exercise -->
         <div class="d-flex justify-content-between align-items-center mt-4">
            <a href="#" class="btn btn-secondary btn-lg">Sebelumnya</a>
            <div>
                <a href="#" class="btn btn-primary btn-lg me-2">Kuis</a>
                <a href="#" class="btn btn-success btn-lg">Mainkan Game</a>
            </div>
            <a href="venus" class="btn btn-secondary btn-lg">Selanjutnya</a>
        </div>
</div>
@endsection
