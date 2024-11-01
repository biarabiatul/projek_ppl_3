@extends('layouts.materi')

@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <div class="navbar-collapse collapse">
        <div class="navbar-title">JUPITER</div>
        <ul class="navbar-nav navbar-align">
            <!-- Your existing nav items here -->
        </ul>
    </div>
</nav>

<div class="container">

    <!-- Div untuk isi materi -->
    <div class="materi-content" style="font-size: 18px; line-height: 1.8; padding: 20px;">
        <h2 style="font-size: 28px; margin-bottom: 20px;">Jupiter</h2>

        <!-- Menambahkan gambar Jupiter dan memastikan gambar berada di tengah -->
        <img src="assets/img/jupiter.jpg" alt="Gambar Jupiter" style="width: 50%; max-width: 400px; height: auto;" class="mx-auto d-block mb-4">

        <p style="margin-bottom: 20px;">
            Sampai hari ini, Jupiter adalah planet terbesar di Tata Surya kita. Ukurannya lebih dari dua kali ketujuh planet disatukan. 
            Jika dibandingkan dengan menggambang Bumi seukuran buah anggur, maka Jupiter sebesar bola basket. Jupiter, seperti juga 
            planet lain, tidaklah ideal untuk kehidupan manusia. Meski demikian, ilmuwan menemukan bahwa beberapa satelit Jupiter 
            memiliki lautan.
        </p>
        
        <h3 style="font-size: 24px; margin-bottom: 15px;">Karakteristik Jupiter</h3>
        <table class="table table-bordered" style="width: 100%; font-size: 18px;">
            <tr>
                <th style="padding: 10px;">Mass</th>
                <td style="padding: 10px;">318 kali massa Bumi</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Satelit</th>
                <td style="padding: 10px;">79 buah satelit dan 4 cincin</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Diameter</th>
                <td style="padding: 10px;">142,984 km (sekitar 11,21 kali diameter Bumi)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Kandungan</th>
                <td style="padding: 10px;">84% hidrogen dan 15% helium</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Gravitasi</th>
                <td style="padding: 10px;">2,53 kali gravitasi Bumi</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Suhu di Permukaan</th>
                <td style="padding: 10px;">-110°C</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Periode Rotasi</th>
                <td style="padding: 10px;">9 jam 55 menit (ukuran Bumi)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Jarak dari Matahari</th>
                <td style="padding: 10px;">5,2 SA (Satuan Astronomi)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Periode Revolusi</th>
                <td style="padding: 10px;">11,9 tahun (ukuran Bumi)</td>
            </tr>
        </table>

        <!-- Bagian Latihan atau Exercise -->
        <div class="exercise-section" style="background-color: #e0f7fa; padding: 20px; border-radius: 10px; margin-top: 40px;">
            <h3 style="font-size: 24px; margin-bottom: 20px;">Exercise</h3>

            <form action="/submit-answers" method="POST">
                @csrf
                
                <!-- Soal 1 -->
                <div class="form-group mb-4">
                    <p style="font-size: 18px;">1. Apa yang membuat Jupiter unik di Tata Surya kita?</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer1" value="A">
                        <label class="form-check-label" style="font-size: 18px;">
                            A. Jupiter adalah planet terkecil di Tata Surya.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer1" value="B">
                        <label class="form-check-label" style="font-size: 18px;">
                            B. Jupiter adalah satu-satunya planet yang memiliki lautan.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer1" value="C">
                        <label class="form-check-label" style="font-size: 18px;">
                            C. Jupiter adalah planet terbesar di Tata Surya.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer1" value="D">
                        <label class="form-check-label" style="font-size: 18px;">
                            D. Jupiter memiliki satu satelit utama.
                        </label>
                    </div>
                </div>

                <!-- Soal 2 -->
                <div class="form-group mb-4">
                    <p style="font-size: 18px;">2. Berapa kali massa Jupiter dibandingkan dengan massa Bumi?</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer2" value="A">
                        <label class="form-check-label" style="font-size: 18px;">
                            A. 10 kali
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer2" value="B">
                        <label class="form-check-label" style="font-size: 18px;">
                            B. 100 kali
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer2" value="C">
                        <label class="form-check-label" style="font-size: 18px;">
                            C. 318 kali
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer2" value="D">
                        <label class="form-check-label" style="font-size: 18px;">
                            D. 500 kali
                        </label>
                    </div>
                </div>

                <!-- Soal 3 -->
                <div class="form-group mb-4">
                    <p style="font-size: 18px;">3. Kandungan utama Jupiter terdiri dari apa saja?</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer3" value="A">
                        <label class="form-check-label" style="font-size: 18px;">
                            A. Karbon dioksida dan nitrogen
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer3" value="B">
                        <label class="form-check-label" style="font-size: 18px;">
                            B. Hidrogen dan helium
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer3" value="C">
                        <label class="form-check-label" style="font-size: 18px;">
                            C. Oksigen dan hidrogen
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer3" value="D">
                        <label class="form-check-label" style="font-size: 18px;">
                            D. Besi dan silikon
                        </label>
                    </div>
                </div>

                <!-- Soal 4 -->
                <div class="form-group mb-4">
                    <p style="font-size: 18px;">4. Berapa diameter Jupiter dibandingkan dengan diameter Bumi?</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer4" value="A">
                        <label class="form-check-label" style="font-size: 18px;">
                            A. 2 kali diameter Bumi
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer4" value="B">
                        <label class="form-check-label" style="font-size: 18px;">
                            B. 5 kali diameter Bumi
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer4" value="C">
                        <label class="form-check-label" style="font-size: 18px;">
                            C. 11,21 kali diameter Bumi
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer4" value="D">
                        <label class="form-check-label" style="font-size: 18px;">
                            D. 20 kali diameter Bumi
                        </label>
                    </div>
                </div>

                                <!-- Soal 5 -->
                                <div class="form-group mb-4">
                    <p style="font-size: 18px;">5. Berapa lama periode revolusi Jupiter dibandingkan dengan Bumi?</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer5" value="A">
                        <label class="form-check-label" style="font-size: 18px;">
                            A. 5,2 tahun
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer5" value="B">
                        <label class="form-check-label" style="font-size: 18px;">
                            B. 9,5 tahun
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer5" value="C">
                        <label class="form-check-label" style="font-size: 18px;">
                            C. 11,9 tahun
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer5" value="D">
                        <label class="form-check-label" style="font-size: 18px;">
                            D. 15 tahun
                        </label>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" style="font-size: 18px;">Submit Jawaban</button>
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
