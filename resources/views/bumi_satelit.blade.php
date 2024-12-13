@extends('layouts.materi')

@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <div class="navbar-collapse collapse">
        <div class="navbar-title">BUMI DAN SATELITNYA</div>
        <ul class="navbar-nav navbar-align">
            <!-- Your existing nav items here -->
        </ul>
    </div>
</nav>

<div class="container">

    <!-- Div baru untuk isi materi -->
    <div class="materi-content" style="font-size: 18px; line-height: 1.8; padding: 20px;">
        <div class="sketchfab-embed-wrapper" style="text-align: center;">
            <iframe title="Solar Eclipse" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/f0512017c37f4830b7eb068b7f1b1a11/embed" style="width: 100%; height: 500px;"> </iframe>
            <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;">
                <a href="https://sketchfab.com/3d-models/cartoon-lowpoly-earth-planet-2-uvw-textured-73dd3283bf6d45a3a62d4806f3044633?utm_medium=embed&utm_campaign=share-popup&utm_content=73dd3283bf6d45a3a62d4806f3044633" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;"></a><i>Bumi, Matahari, dan Bulan</i>
            </p>
        </div>
        <p style="margin-bottom: 20px;">
            Pada bagian ini kalian akan lebih jauh mengenal bagaimana Bumi bergerak dan dampaknya pada kehidupan manusia sehari-hari, juga mengenal satelit yang dimiliki Bumi. Tahukah kalian, ternyata satelit milik Bumi tidak hanya Bulan, lho! Mari cari tahu dengan mempelajari bagian ini.
        </p>

        <!-- Pergerakan Bumi dalam Sistem Tata Surya -->
        <h3 style="font-size: 24px; margin-bottom: 15px;">1. Pergerakan Bumi dalam Sistem Tata Surya</h3>
        <p style="margin-bottom: 20px;">
            Waktu yang digunakan planet untuk mengitari Matahari disebut periode tahun, sedangkan waktu yang digunakan planet untuk berputar pada sumbunya disebut periode hari. Berdasarkan jarak antara planet dengan Matahari menyebabkan panjang 1 tahun tiap planet berbeda-beda.
        </p>

        <ol type="a">
            <li><h4 style="font-size: 20px; margin-bottom: 10px;">Siang dan Malam</h4>
                <p>Ketika Bumi berputar mengitari porosnya, pergantian siang dan malam terjadi. Bagian Bumi yang menerima sinar Matahari akan mengalami siang, sebaliknya bagian lainnya mengalami malam.</p>
            </li>
            <li><h4 style="font-size: 20px; margin-bottom: 10px;">Pergantian Tahun</h4>
                <p>Bumi mengelilingi Matahari selama 1 tahun. Untuk memudahkan penghitungan, setiap 4 tahun sekali ditambahkan 1 hari pada kalender tahunan kita, yang disebut tahun kabisat.</p>
            </li>
            <li><h4 style="font-size: 20px; margin-bottom: 10px;">Pergantian Musim</h4>
                <p>Gerak Bumi mengelilingi Matahari menyebabkan pergantian musim. Musim yang dialami suatu daerah bergantung pada posisinya di Bumi.</p>
            </li></ol>
        <!-- Bulan Sebagai Satelit Bumi -->
        <h3 style="font-size: 24px; margin-bottom: 15px;">2. Bulan Sebagai Satelit Bumi</h3>
        <div class="sketchfab-embed-wrapper" style="text-align: center;">
            <iframe title="Solar Eclipse" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/b71b32bd925c4647a2477901a74156f6/embed" style="width: 100%; height: 500px;"> </iframe>
            <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;">
                <a href="https://sketchfab.com/3d-models/cartoon-lowpoly-earth-planet-2-uvw-textured-73dd3283bf6d45a3a62d4806f3044633?utm_medium=embed&utm_campaign=share-popup&utm_content=73dd3283bf6d45a3a62d4806f3044633" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;"></a><i>Bumi dan Bulan</i>
            </p>
        </div>
        <ol type="a">
            <li><h4 style="font-size: 20px; margin-bottom: 10px;">Karakteristik Bulan</h4>
                <p>Bulan memengaruhi gaya gravitasi Bumi, membantu menjaga kestabilannya. Jarak yang tepat antara Bulan dan Bumi menyebabkan Bulan berperan dalam menjaga kestabilan Bumi.</p>
            </li>
            <li><h4 style="font-size: 20px; margin-bottom: 10px;">Fase Bulan</h4>
                <p>Dari Bumi, bentuk Bulan terlihat berubah bergantung pada posisinya mengelilingi Bumi, yang disebut sebagai Fase Bulan.</p>
            </li>
            <li><h4 style="font-size: 20px; margin-bottom: 10px;">Gerhana Bulan</h4>
                <p>Gerhana Bulan terjadi ketika Bulan masuk ke dalam bayangan Bumi, yang membuatnya lenyap sebagian atau seluruhnya. Ada dua jenis gerhana bulan yaitu gerhana bulan total dan gerhana bulan sebagian.</p>
            </li>
        </ol>
        

        <div class="exercise-section" style="background-color: #ffff; padding: 20px; border-radius: 10px; margin-top: 40px;">        
            <form action="/submit-answer" method="POST">
                @csrf
        
         <!-- Bagian Latihan atau Exercise -->
         <div class="d-flex justify-content-between align-items-center mt-4">
              <div>
                <a href="#" class="btn btn-primary btn-lg me-2">Kuis</a>
                <a href="#" class="btn btn-success btn-lg">Mainkan Game</a>
            </div>
            <a href="matahari" class="btn btn-secondary btn-lg" style="background-color: #5a2b91; color: white;">Selanjutnya</a>
        </div>
</div>
@endsection
