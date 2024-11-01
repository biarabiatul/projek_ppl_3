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
        <h2 style="font-size: 28px; margin-bottom: 20px;">Bumi dan Satelitnya</h2>

        <p style="margin-bottom: 20px;">
            Pada bagian ini kalian akan lebih jauh mengenal bagaimana Bumi bergerak dan dampaknya pada kehidupan manusia sehari-hari, juga mengenal satelit yang dimiliki Bumi. Tahukah kalian, ternyata satelit milik Bumi tidak hanya Bulan, lho! Mari cari tahu dengan mempelajari bagian ini.
        </p>

        <!-- Pergerakan Bumi dalam Sistem Tata Surya -->
        <h3 style="font-size: 24px; margin-bottom: 15px;">1. Pergerakan Bumi dalam Sistem Tata Surya</h3>
        <p style="margin-bottom: 20px;">
            Waktu yang digunakan planet untuk mengitari Matahari disebut periode tahun, sedangkan waktu yang digunakan planet untuk berputar pada sumbunya disebut periode hari. Berdasarkan jarak antara planet dengan Matahari menyebabkan panjang 1 tahun tiap planet berbeda-beda.
        </p>

        <!-- Siang dan Malam -->
        <h4 style="font-size: 20px; margin-bottom: 10px;">a. Siang dan Malam</h4>
        <p style="margin-bottom: 20px;">
            Ketika Bumi berputar mengitari porosnya, pergantian siang dan malam terjadi. Bagian Bumi yang menerima sinar Matahari akan mengalami siang, sebaliknya bagian lainnya mengalami malam.
        </p>

        <!-- Pergantian Tahun -->
        <h4 style="font-size: 20px; margin-bottom: 10px;">b. Pergantian Tahun</h4>
        <p style="margin-bottom: 20px;">
            Bumi mengelilingi Matahari selama 1 tahun. Untuk memudahkan penghitungan, setiap 4 tahun sekali ditambahkan 1 hari pada kalender tahunan kita, yang disebut tahun kabisat.
        </p>

        <!-- Pergantian Musim -->
        <h4 style="font-size: 20px; margin-bottom: 10px;">c. Pergantian Musim</h4>
        <p style="margin-bottom: 20px;">
            Gerak Bumi mengelilingi Matahari menyebabkan pergantian musim. Musim yang dialami suatu daerah bergantung pada posisinya di Bumi.
        </p>

        <!-- Bulan Sebagai Satelit Bumi -->
        <h3 style="font-size: 24px; margin-bottom: 15px;">2. Bulan Sebagai Satelit Bumi</h3>
        
        <!-- Karakteristik Bulan -->
        <h4 style="font-size: 20px; margin-bottom: 10px;">a. Karakteristik Bulan</h4>
        <p style="margin-bottom: 20px;">
            Bulan memengaruhi gaya gravitasi Bumi, membantu menjaga kestabilannya. Jarak yang tepat antara Bulan dan Bumi menyebabkan Bulan berperan dalam menjaga kestabilan Bumi.
        </p>

        <!-- Fase Bulan -->
        <h4 style="font-size: 20px; margin-bottom: 10px;">b. Fase Bulan</h4>
        <p style="margin-bottom: 20px;">
            Dari Bumi, bentuk Bulan terlihat berubah bergantung pada posisinya mengelilingi Bumi, yang disebut sebagai Fase Bulan.
        </p>

        <!-- Gerhana Bulan -->
        <h4 style="font-size: 20px; margin-bottom: 10px;">c. Gerhana Bulan</h4>
        <p style="margin-bottom: 20px;">
            Gerhana Bulan terjadi ketika Bulan masuk ke dalam bayangan Bumi, yang membuatnya lenyap sebagian atau seluruhnya. Ada dua jenis gerhana Bulan: total dan sebagian.
        </p>

        <!-- Bagian Latihan atau Exercise -->
        <div class="exercise-section" style="background-color: #e0f7fa; padding: 20px; border-radius: 10px; margin-top: 40px;">
            <h3 style="font-size: 24px; margin-bottom: 20px;">Exercise</h3>
            <p style="font-size: 18px; margin-bottom: 20px;">Apakah nama satelit utama Bumi?</p>
            
            <form action="/submit-answer" method="POST">
                @csrf
                <div class="form-group">
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="answer" id="option1" value="Bulan">
                        <label class="form-check-label" for="option1" style="font-size: 18px;">
                            Bulan
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="answer" id="option2" value="Mars">
                        <label class="form-check-label" for="option2" style="font-size: 18px;">
                            Mars
                        </label>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Submit Answer</button>
                </div>
            </form>
        </div>

        <!-- Button menuju ke halaman game -->
        <div class="text-center" style="margin-top: 20px;">
            <a href="game" class="btn btn-warning btn-lg">Mainkan Game</a>
        </div>

    </div>
</div>
@endsection
