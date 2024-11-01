@extends('layouts.materi')

@section('container')
<nav class="navbar navbar-expand-lg navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <div class="collapse navbar-collapse">
        <span class="navbar-title" style="font-size: 20px; font-weight: bold;">Mengenal Matahari</span>
        <ul class="navbar-nav ms-auto">
            <!-- Tambahkan nav item di sini jika diperlukan -->
        </ul>
    </div>
</nav>

<div class="container mt-4">
    <!-- Konten Materi -->
    <div class="materi-content" style="font-size: 18px; line-height: 1.8;">
        <h2 style="font-size: 28px; font-weight: bold; margin-bottom: 20px; text-align: center;">Mengenal Matahari Lebih Dekat</h2>        
        <img src="assets/img/matahari.jpg" alt="Gambar Matahari" style="width: 25%; max-width: 400px; height: auto;" class="mx-auto d-block mb-4">
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
                <p style="margin-bottom: 20px;">Yaitu cekungan di permukaan Matahari yang terlihat lebih gelap karena memiliki suhu beberapa ribu derajat lebih rendah dibandingkan suhu di sekitarnya.
                </p></li>
            <li><h4 style="font-size: 20px; margin-bottom: 10px;">Suar surya</h4>
                <p style="margin-bottom: 20px;">Yaitu ledakan atau semburan yang terjadi di atmosfer Matahari. Suar ini melepaskan sejumlah besar energi. Meski dalam jumlah energi yang kecil, cukup untuk menyebabkan gangguan pada alat komunikasi seluler, radio dan televisi di Bumi. 
                </p></li>
            <li><h4 style="font-size: 20px; margin-bottom: 10px;">Prominensa Matahari</h4>
                <p style="margin-bottom: 20px;">yaitu bagian Matahari yang menyerupai lidah api di permukaannya, mulai dari lapisan fotosfer hingga korona.
                </p></li>
            <li><h4 style="font-size: 20px; margin-bottom: 10px;">Angin Matahari</h4>
                <p style="margin-bottom: 20px;">dibentuk oleh aliran partikel yang dipancarkan Matahari secara terus menerus.
                </p></li>
        </ol>

        <h3 style="font-size: 24px; margin-bottom: 15px;">2. Gerhana Matahari</h3>
        <img src="assets/img/gerhana.jpg" alt="Gambar Matahari" style="width: 90%; max-width: 800px; height: auto;" class="mx-auto d-block mb-4">
        <p style="margin-bottom: 20px;">
            Gerhana Matahari terjadi ketika Bulan hadir di tengah-tengah Matahari dan Bumi, sehingga bayangan Bulan-lah yang terlihat dari Bumi. Ada 3 jenis gerhana matahari yaitu:
        </p>
        <ol type="a">
            <li><p>Gerhana Matahari total terjadi saat Matahari tertutup Bulan.</p></li>
            <li><p>Gerhana Matahari sebagian terjadi saat Bulan menutupi sebagian Matahari.</p></li>
            <li><p>Gerhana Matahari cincin terjadi saat Bulan yang menutupi Matahari berada pada titik terjauhnya dari Bumi.</p></li>    
        </ol>

        <h3 style="font-size: 24px; margin-bottom: 15px;">3. Peran Matahari dalam Kehidupan Manusia</h3>
        <p style="margin-bottom: 20px;">
            Tidak ada makhluk di muka Bumi yang tidak membutuhkan Matahari, bahkan makhluk yang hidup di lingkungan dingin sekalipun. Matahari memegang peranan sangat penting dalam kehidupan. 
        </p> 

        <ol type="a">
            <li><h4 style="font-size: 20px; margin-bottom: 10px;">Energi Matahari dalam bahan bakar fosil</h4>
                <p style="margin-bottom: 20px;">Tumbuhan dan hewan yang mati ribuan tahun lalu dan terkubur di kerak Bumi dipanaskan terus menerus oleh Matahari. Kita menggunakan fosil ini untuk dijadikan bahan bakar kendaraan di masa ini. Tanpa peran Matahari, fosil tidak dapat kita manfaatkan pada hari ini. 
            </p></li>
            <li><h4 style="font-size: 20px; margin-bottom: 10px;">Kehangatan Matahari untuk kesehatan tubuh</h4>
                <p style="margin-bottom: 20px;">Berjemur dan mendapatkan sinar Matahari yang cukup seringkali menjadi resep hidup sehat. “Berjemur 5-15 menit di pagi hari dipercaya cukup untuk menyehatkan tubuh” (https://www.gooddoctor.co.id/uncategorized/manfaat-matahari-bagi-kesehatan/21Oktober 2020). Imunitas tubuh dapat meningkat dengan paparan sinar Matahari yang cukup pada tubuh kita.
            </p></li>
            <li><h4 style="font-size: 20px; margin-bottom: 10px;">Kehangatan Matahari untuk Bumi</h4>
                <p style="margin-bottom: 20px;">Sinar Matahari yang terus menerus diserap Bumi menjadikan Bumi terasa hangat. Suhu yang tepat membuat kehidupan di Bumi dapat terus berlangsung. Tumbuhan membutuhkan sinar Matahari untuk melakukan fotosintesis.
            </p></li>
            <li><h4 style="font-size: 20px; margin-bottom: 10px;">Gravitasi Matahari menjaga Bumi</h4>
                <p style="margin-bottom: 20px;"> Gaya gravitasi dengan kekuatan yang tepat turut berperan dalam menjaga kekokohan posisi Bumi saat ini. Tidak hanya Bumi, gravitasi Matahari ini juga sangat berpengaruh pada posisi planet-planet untuk tetap berada di orbitnya. 
            </p></li>
            <li><h4 style="font-size: 20px; margin-bottom: 10px;">Matahari, Hujan dan Angin</h4>
                <p style="margin-bottom: 20px;"> Tanpa Matahari, rasanya mustahil terjadi hujan di Bumi. Hujan turun karena adanya penguapan air di lautan dan daratan  yang disebabkan karena adanya panas Matahari. Uap air dikumpulkan di awan yang kemudian akan dibawa angin berkelana di langit, lalu turun sebagai air hujan yang membasahi tanah. 
            </p></li>
        
        </ol>   

        



        <!-- Tambahan konten lainnya sesuai materi -->

        <!-- Bagian Latihan atau Exercise -->
        <div class="exercise-section" style="background-color: #f2f2f2; padding: 20px; border-radius: 10px; margin-top: 40px;">
            <h3 style="font-size: 24px; margin-bottom: 20px; text-align: center;">Latihan</h3>
            <p style="font-size: 18px; margin-bottom: 20px;">Apakah nama satelit utama Bumi?</p>
            
            <form action="/submit-answer" method="POST">
                @csrf
                <div class="form-group">
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="answer" id="option1" value="Bulan">
                        <label class="form-check-label" for="option1" style="font-size: 18px;">Bulan</label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="answer" id="option2" value="Mars">
                        <label class="form-check-label" for="option2" style="font-size: 18px;">Mars</label>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Submit Jawaban</button>
                </div>
            </form>
        </div>

        <!-- Button menuju ke halaman game -->
        <div class="text-center mt-4">
            <a href="/game" class="btn btn-warning btn-lg">Mainkan Game</a>
        </div>
    </div>
</div>
@endsection
