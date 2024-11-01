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
         <!-- Menambahkan gambar Mars dan memastikan gambar berada di tengah -->
         <img src="assets/img/venus.jpg" alt="Gambar venus" style="width: 50%; max-width: 400px; height: auto;" class="mx-auto d-block mb-4">
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
        <div class="exercise-section" style="background-color: #e0f7fa; padding: 20px; border-radius: 10px; margin-top: 40px;">
            <h3 style="font-size: 24px; margin-bottom: 20px;">Exercise</h3>
        
            <form action="/submit-answer" method="POST">
                @csrf
        
                <!-- Soal 1 -->
                <p style="font-size: 18px; margin-bottom: 10px;">1. Planet apa yang memiliki suhu permukaan terpanas di Tata Surya?</p>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question1" id="q1option1" value="Bumi">
                    <label class="form-check-label" for="q1option1" style="font-size: 18px;">Bumi</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question1" id="q1option2" value="Mars">
                    <label class="form-check-label" for="q1option2" style="font-size: 18px;">Mars</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question1" id="q1option3" value="Venus">
                    <label class="form-check-label" for="q1option3" style="font-size: 18px;">Venus</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question1" id="q1option4" value="Merkurius">
                    <label class="form-check-label" for="q1option4" style="font-size: 18px;">Merkurius</label>
                </div>
        
                <!-- Soal 2 -->
                <p style="font-size: 18px; margin-bottom: 10px;">2. Apa yang menyebabkan suhu di permukaan Venus sangat panas?</p>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question2" id="q2option1" value="Rotasi planet yang lambat">
                    <label class="form-check-label" for="q2option1" style="font-size: 18px;">Rotasi planet yang lambat</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question2" id="q2option2" value="Kandungan karbon dioksida di atmosfer">
                    <label class="form-check-label" for="q2option2" style="font-size: 18px;">Kandungan karbon dioksida di atmosfer</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question2" id="q2option3" value="Jarak yang terlalu jauh dari Matahari">
                    <label class="form-check-label" for="q2option3" style="font-size: 18px;">Jarak yang terlalu jauh dari Matahari</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question2" id="q2option4" value="Lapisan atmosfer yang tipis">
                    <label class="form-check-label" for="q2option4" style="font-size: 18px;">Lapisan atmosfer yang tipis</label>
                </div>
        
                <!-- Soal 3 -->
                <p style="font-size: 18px; margin-bottom: 10px;">3. Berapa lama waktu yang diperlukan Venus untuk melakukan rotasi penuh?</p>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question3" id="q3option1" value="24 jam">
                    <label class="form-check-label" for="q3option1" style="font-size: 18px;">24 jam</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question3" id="q3option2" value="243 hari">
                    <label class="form-check-label" for="q3option2" style="font-size: 18px;">243 hari</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question3" id="q3option3" value="225 hari">
                    <label class="form-check-label" for="q3option3" style="font-size: 18px;">225 hari</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question3" id="q3option4" value="30 hari">
                    <label class="form-check-label" for="q3option4" style="font-size: 18px;">30 hari</label>
                </div>
        
                <!-- Soal 4 -->
                <p style="font-size: 18px; margin-bottom: 10px;">4. Apa yang dimaksud dengan gerak retrograde pada planet Venus?</p>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question4" id="q4option1" value="Gerak berputar dari barat ke timur">
                    <label class="form-check-label" for="q4option1" style="font-size: 18px;">Gerak berputar dari barat ke timur</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question4" id="q4option2" value="Gerak berputar dari timur ke barat">
                    <label class="form-check-label" for="q4option2" style="font-size: 18px;">Gerak berputar dari timur ke barat</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question4" id="q4option3" value="Gerak berputar mengelilingi Matahari">
                    <label class="form-check-label" for="q4option3" style="font-size: 18px;">Gerak berputar mengelilingi Matahari</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question4" id="q4option4" value="Gerak tetap pada sumbu planet">
                    <label class="form-check-label" for="q4option4" style="font-size: 18px;">Gerak tetap pada sumbu planet</label>
                </div>
        
                <!-- Soal 5 -->
                <p style="font-size: 18px; margin-bottom: 10px;">5. Mengapa permukaan Venus sulit diamati menggunakan teleskop?</p>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question5" id="q5option1" value="Karena Venus sangat jauh dari Bumi">
                    <label class="form-check-label" for="q5option1" style="font-size: 18px;">Karena Venus sangat jauh dari Bumi</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question5" id="q5option2" value="Karena atmosfer Venus sangat tebal">
                    <label class="form-check-label" for="q5option2" style="font-size: 18px;">Karena atmosfer Venus sangat tebal</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question5" id="q5option3" value="Karena cahaya Matahari yang terlalu kuat">
                    <label class="form-check-label" for="q5option3" style="font-size: 18px;">Karena cahaya Matahari yang terlalu kuat</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question5" id="q5option4" value="Karena Venus bergerak terlalu cepat">
                    <label class="form-check-label" for="q5option4" style="font-size: 18px;">Karena Venus bergerak terlalu cepat</label>
                </div>
        
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Submit Answer</button>
                </div>
            </form>
        </div>
        
        <!-- Tombol untuk scroll ke latihan dan game -->
        <div style="margin-top: 30px;">
            <a href="#" class="btn btn-primary">Ke Latihan</a>
            <a href="#" class="btn btn-info">Ke Game</a>
        </div>

</div>
@endsection
