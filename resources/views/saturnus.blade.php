@extends('layouts.materi')

@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <div class="navbar-collapse collapse">
        <div class="navbar-title">SATURNUS</div>
        <ul class="navbar-nav navbar-align">
            <!-- Your existing nav items here -->
        </ul>
    </div>
</nav>

<div class="container">

    <!-- Div baru untuk isi materi -->
    <div class="materi-content" style="font-size: 18px; line-height: 1.8; padding: 20px;">
        <h2 style="font-size: 28px; margin-bottom: 20px;">Saturnus</h2>
        
        <!-- Menambahkan gambar Saturnus dan memastikan gambar berada di tengah -->
        <img src="assets/img/saturnus.jpg" alt="Gambar Saturnus" style="width: 50%; max-width: 400px; height: auto;" class="mx-auto d-block mb-4">

        <p style="margin-bottom: 20px;">
        Disebut sebagai “Perhiasan Tata Surya”, memang 
        Saturnus memiliki penampilan yang sangat menarik. 
        Ukuran diameternya setara dengan 9 buah Bumi 
        yang dijajarkan. Ini tidak termasuk dengan cincin-cincin yang mengelilinginya. Susunan cincin-cincinnya pun mengagumkan, dengan 7 cincin yang 
        berjarak di antaranya, membuat visualisasi Saturnus 
        selalu mengundang decak kagum. 
        </p>
        
        <h3 style="font-size: 24px; margin-bottom: 15px;">Karakteristik Saturnus</h3>
        <table class="table table-bordered" style="width: 100%; font-size: 18px;">
            <tr>
                <th style="padding: 10px;">Massa</th>
                <td style="padding: 10px;">95,184 kali massa Bumi</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Satelit</th>
                <td style="padding: 10px;">82 buah satelit dan 7 cincin</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Diameter</th>
                <td style="padding: 10px;">120.536 km (setara 9,45 kali diameter Bumi)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Kandungan</th>
                <td style="padding: 10px;">Lapisan sangat tebal terdiri 
                atas hidrogen dan helium</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Gravitasi</th>
                <td style="padding: 10px;">1,064 kali gravitasi Bumi</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Suhu di Permukaan</th>
                <td style="padding: 10px;">-180°C</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Periode Rotasi</th>
                <td style="padding: 10px;">10 jam 39 menit (ukuran Bumi)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Jarak dari Matahari</th>
                <td style="padding: 10px;">9,6 SA (Satuan Astronomi)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Periode Revolusi</th>
                <td style="padding: 10px;">29,5 tahun (ukuran Bumi)</td>
            </tr>
        </table>

        <!-- Bagian Latihan atau Exercise -->
        <div class="exercise-section" style="background-color: #e0f7fa; padding: 20px; border-radius: 10px; margin-top: 40px;">
            <h3 style="font-size: 24px; margin-bottom: 20px;">Exercise</h3>
            
            <form action="/submit-answer" method="POST">
                @csrf
                
                <!-- Question 1 -->
                <p style="font-size: 18px; margin-bottom: 20px;">Mengapa Saturnus dijuluki sebagai "Perhiasan Tata Surya"?</p>
                <div class="form-group">
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="answer1" id="q1option1" value="A">
                        <label class="form-check-label" for="q1option1" style="font-size: 18px;">
                            A. Karena memiliki satelit yang sangat banyak
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="answer1" id="q1option2" value="B">
                        <label class="form-check-label" for="q1option2" style="font-size: 18px;">
                            B. Karena diameter Saturnus lebih besar dari planet lain
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="answer1" id="q1option3" value="C">
                        <label class="form-check-label" for="q1option3" style="font-size: 18px;">
                            C. Karena memiliki cincin yang indah dan berlapis-lapis
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="answer1" id="q1option4" value="D">
                        <label class="form-check-label" for="q1option4" style="font-size: 18px;">
                            D. Karena memiliki massa terbesar di Tata Surya
                        </label>
                    </div>
                </div>

                <!-- Question 2 -->
                <p style="font-size: 18px; margin-bottom: 20px;">Berapa jumlah cincin utama yang dimiliki oleh Saturnus?</p>
                <div class="form-group">
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="answer2" id="q2option1" value="A">
                        <label class="form-check-label" for="q2option1" style="font-size: 18px;">
                            A. 3 cincin
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="answer2" id="q2option2" value="B">
                        <label class="form-check-label" for="q2option2" style="font-size: 18px;">
                            B. 5 cincin
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="answer2" id="q2option3" value="C">
                        <label class="form-check-label" for="q2option3" style="font-size: 18px;">
                            C. 7 cincin
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="answer2" id="q2option4" value="D">
                        <label class="form-check-label" for="q2option4" style="font-size: 18px;">
                            D. 9 cincin
                        </label>
                    </div>
                </div>

                <!-- Question 3 -->
                <p style="font-size: 18px; margin-bottom: 20px;">Berapa kali massa Saturnus dibandingkan dengan massa Bumi?</p>
                <div class="form-group">
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="answer3" id="q3option1" value="A">
                        <label class="form-check-label" for="q3option1" style="font-size: 18px;">
                            A. 50 kali massa Bumi
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="answer3" id="q3option2" value="B">
                        <label class="form-check-label" for="q3option2" style="font-size: 18px;">
                            B. 95 kali massa Bumi
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="answer3" id="q3option3" value="C">
                        <label class="form-check-label" for="q3option3" style="font-size: 18px;">
                            C. 80 kali massa Bumi
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="answer3" id="q3option4" value="D">
                        <label class="form-check-label" for="q3option4" style="font-size: 18px;">
                            D. 70 kali massa Bumi
                        </label>
                    </div>
                </div>

                <!-- Question 4 -->
                <p style="font-size: 18px; margin-bottom: 20px;">Apa kandungan utama dari atmosfer Saturnus?</p>
                <div class="form-group">
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="answer4" id="q4option1" value="A">
                        <label class="form-check-label" for="q4option1" style="font-size: 18px;">
                            A. Oksigen dan nitrogen
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="answer4" id="q4option2" value="B">
                        <label class="form-check-label" for="q4option2" style="font-size: 18px;">
                            B. Hidrogen dan helium
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="answer4" id="q4option3" value="C">
                        <label class="form-check-label" for="q4option3" style="font-size: 18px;">
                            C. Karbon dioksida dan air
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="answer4" id="q4option4" value="D">
                        <label class="form-check-label" for="q4option4" style="font-size: 18px;">
                            D. Metana dan amonia
                        </label>
                    </div>
                </div>

                <!-- Question 5 -->
                <p style="font-size: 18px; margin-bottom: 20px;">Berapa periode rotasi Saturnus jika dibandingkan dengan satu hari di Bumi?</p>
                <div class="form-group">
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="answer5" id="q5option1" value="A">
                        <label class="form-check-label" for="q5option1" style="font-size: 18px;">
                            A. 9,5 jam
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="answer5" id="q5option2" value="B">
                        <label class="form-check-label" for="q5option2" style="font-size: 18px;">
                            B. 10,7 jam
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="answer5" id="q5option3" value="C">
                        <label class="form-check-label" for="q5option3" style="font-size: 18px;">
                            C. 12,3 jam
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="answer5" id="q5option4" value="D">
                        <label class="form-check-label" for="q5option4" style="font-size: 18px;">
                            D. 15 jam
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
            <a href="jupiter" class="btn btn-secondary btn-lg">Sebelumnya</a>
            <a href="uranus" class="btn btn-secondary btn-lg">Selanjutnya</a>
        </div>

        <!-- Button menuju ke halaman game -->
        <div class="text-center" style="margin-top: 20px;">
            <a href="game" class="btn btn-warning btn-lg">Mainkan Game</a>
        </div>
        
    </div>
</div>
@endsection
