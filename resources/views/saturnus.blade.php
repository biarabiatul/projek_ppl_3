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
            <p style="font-size: 18px; margin-bottom: 20px;">What is the most distinctive feature of Saturn?</p>
            
            <form action="/submit-answer" method="POST">
                @csrf
                <div class="form-group">
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="answer" id="option1" value="Its rings">
                        <label class="form-check-label" for="option1" style="font-size: 18px;">
                            Its rings
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="answer" id="option2" value="Its moons">
                        <label class="form-check-label" for="option2" style="font-size: 18px;">
                            Its moons
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="answer" id="option3" value="Its size">
                        <label class="form-check-label" for="option3" style="font-size: 18px;">
                            Its size
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="answer" id="option4" value="Its color">
                        <label class="form-check-label" for="option4" style="font-size: 18px;">
                            Its color
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
        
    </div>
</div>
@endsection
