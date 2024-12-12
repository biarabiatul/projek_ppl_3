@extends('layouts.materi')

@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <div class="navbar-collapse collapse">
        <div class="navbar-title">BUMI</div>
        <ul class="navbar-nav navbar-align">
            <!-- Your existing nav items here -->
        </ul>
    </div>
</nav>

<div class="container">

    <!-- Div baru untuk isi materi -->
    <div class="materi-content" style="font-size: 18px; line-height: 1.8; padding: 20px;">
         <!-- Menambahkan embed model 3D dari Sketchfab -->
         <div class="sketchfab-embed-wrapper" style="text-align: center;">
            <iframe title="Solar Eclipse" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/73dd3283bf6d45a3a62d4806f3044633/embed" style="width: 100%; height: 500px;"> </iframe>
            <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;">
                <a href="https://sketchfab.com/3d-models/cartoon-lowpoly-earth-planet-2-uvw-textured-73dd3283bf6d45a3a62d4806f3044633?utm_medium=embed&utm_campaign=share-popup&utm_content=73dd3283bf6d45a3a62d4806f3044633" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;"> Bumi tempat tinggal kita</a>
            </p>
        </div>

        <p style="margin-bottom: 20px;">
            Selamat datang di rumah kita. Bumi tempat tinggal 
            kita ini merupakan planet di urutan ketiga dalam Tata 
            Surya. Lapisan atmosfer yang terdiri atas nitrogen, 
            oksigen, dan berbagai gas lain dalam jumlah yang 
            tepat menjadikan udara Bumi sempurna untuk kita 
            dan makhluk hidup lainnya. Lapisan atmosfer juga 
            melindungi kita dari berbagai marabahaya di luar 
            sana, seperti meteorit maupun energi Matahari yang 
            berlebihan.
        </p>
        
        <h3 style="font-size: 24px; margin-bottom: 15px;">Karakteristik Bumi</h3>
        <table class="table table-bordered" style="width: 100%; font-size: 18px;">
            <tr>
                <th style="padding: 10px;">Massa</th>
                <td style="padding: 10px;">5.980.000.000.000.000.000.000.000 kg</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Satelit</th>
                <td style="padding: 10px;"> 1 (disebut Bulan)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Diameter</th>
                <td style="padding: 10px;">12.756 km</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Kandungan</th>
                <td style="padding: 10px;">78% nitrogen, 21% oksigen, 1%
                    karbon dioksida, argon dan uap air 
                   serta gas lain </td>
            </tr>
            <tr>
                <th style="padding: 10px;">Gravitasi</th>
                <td style="padding: 10px;">9,807 m/s2 (1,0 kali gravitasi Bumi)  </td>
            </tr>
            <tr>
                <th style="padding: 10px;">Suhu di Permukaan</th>
                <td style="padding: 10px;">Sekitar 22°C</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Periode Rotasi</th>
                <td style="padding: 10px;">1 hari (ukuran Bumi)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Jarak dari Matahari</th>
                <td style="padding: 10px;">149.600.000 km atau 1 SA (Satuan Astronomi)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Periode Revolusi</th>
                <td style="padding: 10px;">365,25 hari (ukuran Bumi)</td>
            </tr>
        </table>
        <div class="exercise-section" style="background-color: #e0f7fa; padding: 20px; border-radius: 10px; margin-top: 40px;">
            <h3 style="font-size: 24px; margin-bottom: 20px;">Exercise</h3>
        
            <form action="/submit-answer" method="POST">
                @csrf
        
                <!-- Soal 1 -->
                <p style="font-size: 18px; margin-bottom: 10px;">1. Apa urutan posisi Bumi dalam Tata Surya berdasarkan jaraknya dari Matahari?</p>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question1" id="q1option1" value="Pertama">
                    <label class="form-check-label" for="q1option1" style="font-size: 18px;">Pertama</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question1" id="q1option2" value="Kedua">
                    <label class="form-check-label" for="q1option2" style="font-size: 18px;">Kedua</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question1" id="q1option3" value="Ketiga">
                    <label class="form-check-label" for="q1option3" style="font-size: 18px;">Ketiga</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question1" id="q1option4" value="Keempat">
                    <label class="form-check-label" for="q1option4" style="font-size: 18px;">Keempat</label>
                </div>
        
                <!-- Soal 2 -->
                <p style="font-size: 18px; margin-bottom: 10px;">2. Apa saja komponen utama penyusun atmosfer Bumi?</p>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question2" id="q2option1" value="Oksigen dan karbon dioksida">
                    <label class="form-check-label" for="q2option1" style="font-size: 18px;">Oksigen dan karbon dioksida</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question2" id="q2option2" value="Nitrogen dan oksigen">
                    <label class="form-check-label" for="q2option2" style="font-size: 18px;">Nitrogen dan oksigen</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question2" id="q2option3" value="Hidrogen dan helium">
                    <label class="form-check-label" for="q2option3" style="font-size: 18px;">Hidrogen dan helium</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question2" id="q2option4" value="Oksigen dan argon">
                    <label class="form-check-label" for="q2option4" style="font-size: 18px;">Oksigen dan argon</label>
                </div>
        
                <!-- Soal 3 -->
                <p style="font-size: 18px; margin-bottom: 10px;">3. Berapa besar gravitasi Bumi?</p>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question3" id="q3option1" value="9,807 m/s²">
                    <label class="form-check-label" for="q3option1" style="font-size: 18px;">9,807 m/s²</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question3" id="q3option2" value="9,8 m/s²">
                    <label class="form-check-label" for="q3option2" style="font-size: 18px;">9,8 m/s²</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question3" id="q3option3" value="1,6 m/s²">
                    <label class="form-check-label" for="q3option3" style="font-size: 18px;">1,6 m/s²</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question3" id="q3option4" value="22 m/s²">
                    <label class="form-check-label" for="q3option4" style="font-size: 18px;">22 m/s²</label>
                </div>
        
                <!-- Soal 4 -->
                <p style="font-size: 18px; margin-bottom: 10px;">4. Bumi memiliki berapa satelit alami?</p>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question4" id="q4option1" value="Tidak ada">
                    <label class="form-check-label" for="q4option1" style="font-size: 18px;">Tidak ada</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question4" id="q4option2" value="Satu">
                    <label class="form-check-label" for="q4option2" style="font-size: 18px;">Satu</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question4" id="q4option3" value="Dua">
                    <label class="form-check-label" for="q4option3" style="font-size: 18px;">Dua</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question4" id="q4option4" value="Empat">
                    <label class="form-check-label" for="q4option4" style="font-size: 18px;">Empat</label>
                </div>
        
                <!-- Soal 5 -->
                <p style="font-size: 18px; margin-bottom: 10px;">5. Berapa lama periode revolusi Bumi meng
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question5" id="q5option1" value="24 jam">
                    <label class="form-check-label" for="q5option1" style="font-size: 18px;">24 jam</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question5" id="q5option2" value="30 hari">
                    <label class="form-check-label" for="q5option2" style="font-size: 18px;">30 hari</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question5" id="q5option3" value="180 hari">
                    <label class="form-check-label" for="q5option3" style="font-size: 18px;">180 hari</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question5" id="q5option4" value="365,25 hari">
                    <label class="form-check-label" for="q5option4" style="font-size: 18px;">365,25 hari</label>
                </div>
        
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Submit Answer</button>
                </div>
            </form>
        </div>
        
        <!-- Tombol untuk scroll ke latihan dan game -->
        <div class="d-flex justify-content-between" style="margin-top: 40px;">
            <a href="venus" class="btn btn-secondary btn-lg">Sebelumnya</a>
            <a href="jupiter" class="btn btn-secondary btn-lg">Selanjutnya</a>
        </div>

</div>
@endsection
