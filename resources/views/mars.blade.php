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
        <h2 style="font-size: 28px; margin-bottom: 20px;">Mars</h2>
        
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

        <!-- Bagian Latihan atau Exercise -->
<div class="exercise-section" style="background-color: #e0f7fa; padding: 20px; border-radius: 10px; margin-top: 40px;">
    <h3 style="font-size: 24px; margin-bottom: 20px;">Exercise</h3>
    
    <!-- Pertanyaan 1 -->
    <p style="font-size: 18px; margin-bottom: 20px;">1. Mengapa ilmuwan memutuskan bahwa sulit untuk hidup di planet Mars?</p>
    <form action="/submit-answer" method="POST">
        @csrf
        <div class="form-group">
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="answer1" id="q1option1" value="Mars memiliki atmosfer yang tebal">
                <label class="form-check-label" for="q1option1" style="font-size: 18px;">
                    A. Mars memiliki atmosfer yang tebal
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="answer1" id="q1option2" value="Suhu permukaan Mars sangat tinggi">
                <label class="form-check-label" for="q1option2" style="font-size: 18px;">
                    B. Suhu permukaan Mars sangat tinggi
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="answer1" id="q1option3" value="Mars memiliki atmosfer tipis dan oksida besi di permukaannya">
                <label class="form-check-label" for="q1option3" style="font-size: 18px;">
                    C. Mars memiliki atmosfer tipis dan oksida besi di permukaannya
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="answer1" id="q1option4" value="Mars tidak memiliki satelit alami">
                <label class="form-check-label" for="q1option4" style="font-size: 18px;">
                    D. Mars tidak memiliki satelit alami
                </label>
            </div>
        </div>
        
        <!-- Pertanyaan 2 -->
        <p style="font-size: 18px; margin-bottom: 20px;">2. Apa nama lain dari planet Mars yang didasarkan pada warnanya?</p>
        <div class="form-group">
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="answer2" id="q2option1" value="Planet Terdekat">
                <label class="form-check-label" for="q2option1" style="font-size: 18px;">
                    A. Planet Terdekat
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="answer2" id="q2option2" value="Planet Berapi">
                <label class="form-check-label" for="q2option2" style="font-size: 18px;">
                    B. Planet Berapi
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="answer2" id="q2option3" value="Planet Beku">
                <label class="form-check-label" for="q2option3" style="font-size: 18px;">
                    C. Planet Beku
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="answer2" id="q2option4" value="Planet Berkarat">
                <label class="form-check-label" for="q2option4" style="font-size: 18px;">
                    D. Planet Berkarat
                </label>
            </div>
        </div>
        
        <!-- Pertanyaan 3 -->
        <p style="font-size: 18px; margin-bottom: 20px;">3. Berapa diameter Mars jika dibandingkan dengan Bumi?</p>
        <div class="form-group">
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="answer3" id="q3option1" value="0,5 kali diameter Bumi">
                <label class="form-check-label" for="q3option1" style="font-size: 18px;">
                    A. 0,5 kali diameter Bumi
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="answer3" id="q3option2" value="2 kali diameter Bumi">
                <label class="form-check-label" for="q3option2" style="font-size: 18px;">
                    B. 2 kali diameter Bumi
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="answer3" id="q3option3" value="Sama dengan diameter Bumi">
                <label class="form-check-label" for="q3option3" style="font-size: 18px;">
                    C. Sama dengan diameter Bumi
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="answer3" id="q3option4" value="1,5 kali diameter Bumi">
                <label class="form-check-label" for="q3option4" style="font-size: 18px;">
                    D. 1,5 kali diameter Bumi
                </label>
            </div>
        </div>

        <!-- Pertanyaan 4 -->
        <p style="font-size: 18px; margin-bottom: 20px;">4. Apa yang menyebabkan Mars terlihat berwarna merah?</p>
        <div class="form-group">
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="answer4" id="q4option1" value="Kandungan nitrogen yang tinggi">
                <label class="form-check-label" for="q4option1" style="font-size: 18px;">
                    A. Kandungan nitrogen yang tinggi
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="answer4" id="q4option2" value="Lapisan tanah yang mengandung oksigen">
                <label class="form-check-label" for="q4option2" style="font-size: 18px;">
                    B. Lapisan tanah yang mengandung oksigen
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="answer4" id="q4option3" value="Adanya besi yang teroksidasi">
                <label class="form-check-label" for="q4option3" style="font-size: 18px;">
                    C. Adanya besi yang teroksidasi
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="answer4" id="q4option4" value="Awan gas metana di atmosfer">
                <label class="form-check-label" for="q4option4" style="font-size: 18px;">
                    D. Awan gas metana di atmosfer
                </label>
            </div>
        </div>

        <!-- Pertanyaan 5 -->
        <p style="font-size: 18px; margin-bottom: 20px;">5. Berapa suhu rata-rata di permukaan Mars?</p>
        <div class="form-group">
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="answer5" id="q5option1" value="-15°C">
                <label class="form-check-label" for="q5option1" style="font-size: 18px;">
                    A. -15°C
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="answer5" id="q5option2" value="-63°C">
                <label class="form-check-label" for="q5option2" style="font-size: 18px;">
                    B. -63°C
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="answer5" id="q5option3" value="-120°C">
                <label class="form-check-label" for="q5option3" style="font-size: 18px;">
                    C. -120°C
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="answer5" id="q5option4" value="0°C">
                <label class="form-check-label" for="q5option4" style="font-size: 18px;">
                    D. 0°C
                </label>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg">Submit Answer</button>
        </div>
    </form>
</div>


        <!-- Tombol navigasi dan scroll ke latihan serta game -->
        <div class="d-flex justify-content-between" style="margin-top: 40px;">
            <a href="venus" class="btn btn-secondary btn-lg">Sebelumnya</a>
            <a href="jupiter" class="btn btn-secondary btn-lg">Selanjutnya</a>
        </div>

        <!-- Button menuju ke halaman game -->
        <div class="text-center" style="margin-top: 20px;">
            <a href="game" class="btn btn-warning btn-lg">Mainkan Game</a>
        </div>
        
    </div>
</div>
@endsection
