@extends('layouts.materi')
@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <div class="navbar-collapse collapse">
        <div class="navbar-title">PENDAHULUAN</div>
        <ul class="navbar-nav navbar-align">
            <!-- Your existing nav items here -->
        </ul>
    </div>
</nav>

<div class="container">
    <!-- Div baru untuk isi materi -->
    <div class="materi-content">
        <p style="margin-bottom: 20px;">
        Sistem tata surya adalah suatu sistem yang terdiri dari bintang, planet, satelit, asteroid, komet, dan berbagai benda langit lainnya yang berinteraksi satu sama lain melalui gaya gravitasi. Di pusat sistem ini terdapat Matahari, yang merupakan sumber energi utama bagi seluruh komponen di dalamnya. Tata surya kita tidak hanya merupakan tempat tinggal bagi planet-planet seperti Bumi, tetapi juga berisi beragam fenomena dan struktur yang menarik untuk dipelajari.</p>

        <p> 
            Materi ini dirancang untuk memberikan pemahaman yang mendalam tentang struktur dan dinamika sistem tata surya. Dengan menggali informasi tentang planet-planet, karakteristiknya, serta interaksi antar benda langit, kita dapat lebih memahami posisi kita di alam semesta yang luas. Dalam proses pembelajaran ini, siswa akan diajak untuk berpartisipasi aktif melalui evaluasi yang dirancang untuk mengukur pemahaman mereka tentang topik-topik yang dibahas.
        </p>

        <!-- Menambahkan gambar dalam grid 1 baris 2 kolom -->
        <div class="row">
            <div class="col-md-6">
                <img src="img/cp2.png" alt="Gambar 1" class="img-fluid" style="width: 100%; max-width: 600px; height: auto;">
            </div>
            <div class="col-md-6">
                <img src="img/cp1.png" alt="Gambar 2" class="img-fluid" style="width: 100%; max-width: 600px; height: auto;">
            </div>
        </div>

        <br>
        <p> 
        Dalam bab ini, kita akan mengeksplorasi berbagai aspek tata surya, mulai dari pengertian dasar tentang apa itu tata surya, urutan planet-planet, hingga karakteristik unik masing-masing planet. Selain itu, kita juga akan membahas fenomena menarik seperti fase bulan, gerak planet, dan kondisi atmosfer di berbagai planet.
        </p>

        <p>
        Dengan memahami tata surya, diharapkan kita dapat mengembangkan rasa ingin tahu yang lebih besar tentang alam semesta dan bagaimana kita, sebagai manusia, berinteraksi dengan lingkungan di sekitar kita. Mari kita mulai perjalanan pengetahuan ini dengan memahami apa yang dimaksud dengan tata surya dan komponen-komponen yang menyusunnya.
        </p>
    </div>
    <div class="d-flex justify-content-between align-items-center mt-4">
        
        <div>
            
        </div>
        <a href="bumi" class="btn btn-secondary btn-lg" style="background-color: #5a2b91; color: white;">Selanjutnya</a>
    </div>
</div>
@endsection
