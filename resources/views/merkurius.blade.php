@extends('layouts.materi')

@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <div class="navbar-collapse collapse">
        <div class="navbar-title">MERKURIUS</div>
        <ul class="navbar-nav navbar-align">
            <!-- Your existing nav items here -->
        </ul>
    </div>
</nav>

<div class="container">

    <!-- Div baru untuk isi materi -->
    <div class="materi-content" style="font-size: 18px; line-height: 1.8; padding: 20px;">
        <h2 style="font-size: 28px; margin-bottom: 20px;">Merkurius</h2>
         <!-- Menambahkan gambar Mars dan memastikan gambar berada di tengah -->
         <img src="assets/img/merkurius.jpeg" alt="Gambar merkurius" style="width: 50%; max-width: 400px; height: auto;" class="mx-auto d-block mb-4">
        <p style="margin-bottom: 20px;">
            Planet terdekat dengan Matahari ini bergerak cepat 
            di lintasannya. Dinamai Merkurius, seperti nama 
            dewa Romawi yang menjadi utusan para dewa yang 
            geraknya juga cepat. Oleh karena jaraknya sangat dekat dengan 
            Matahari, planet ini sulit untuk diamati dengan 
            mata telanjang. Merkurius dapat dilihat beberapa 
            saat sebelum Matahari terbit (subuh) dan setelah 
            Matahari tenggelam, sehingga ia kadang disebut 
            juga sebagai bintang fajar atau bintang malam. 
            Banyak yang mengira Merkurius adalah 
            planet terpanas dalam Tata Surya, dengan alasan 
            karena ialah yang paling dekat dengan Matahari. 
            Tetapi ternyata tidaklah demikian. Seperti yang kalian ketahui, atmosfer adalah 
            lapisan terluar planet. Setiap planet memiliki atmosfer 
            dengan perbandingan bahan penyusun yang berbeda
            beda. Perbandingan bahan penyusun ini yang 
            akan memengaruhi kemampuan atmosfer untuk 
            memerangkap energi dari Matahari. Energi yang 
            diperangkap tersebut lalu dipantulkan ke permukaan 
            planet. Semakin banyak energi yang diperangkap, 
            semakin panas suhu permukaan planet tersebut. 
            Atmosfer Merkurius yang tipis membuatnya sulit 
            menahan energi yang diterima dari Matahari, sehingga 
            suhu permukaannya tidak sepanas yang diduga.
        </p>
        
        <h3 style="font-size: 24px; margin-bottom: 15px;">Karakteristik Merkurius</h3>
        <table class="table table-bordered" style="width: 100%; font-size: 18px;">
            <tr>
                <th style="padding: 10px;">Massa</th>
                <td style="padding: 10px;"> 0,056 kali massa Bumi</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Satelit</th>
                <td style="padding: 10px;"> Tidak ada</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Diameter</th>
                <td style="padding: 10px;"> 4.878 km (setara 0,38 kali diameter Bumi)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Kandungan</th>
                <td style="padding: 10px;">Kebanyakan Helium</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Gravitasi</th>
                <td style="padding: 10px;"> 0,38 kali gravitasi Bumi</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Suhu di Permukaan</th>
                <td style="padding: 10px;"> -170°C pada malam hari dan 430°C pada siang hari </td>
            </tr>
            <tr>
                <th style="padding: 10px;">Periode Rotasi</th>
                <td style="padding: 10px;">59 hari (ukuran Bumi)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Jarak dari Matahari</th>
                <td style="padding: 10px;"> 0,39 SA (Satuan Astronomi) </td>
            </tr>
            <tr>
                <th style="padding: 10px;">Periode Revolusi</th>
                <td style="padding: 10px;">  88 hari (ukuran Bumi)</td>
            </tr>
        </table>

        <!-- Bagian Latihan atau Exercise -->
        <div class="exercise-section" style="background-color: #e0f7fa; padding: 20px; border-radius: 10px; margin-top: 40px;">
            <h3 style="font-size: 24px; margin-bottom: 20px;">Exercise</h3>
        
            <form action="/submit-answer" method="POST">
                @csrf
        
                <!-- Soal 1 -->
                <p style="font-size: 18px; margin-bottom: 10px;">1. Apa nama planet terdekat dengan Matahari?</p>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question1" id="q1option1" value="Venus">
                    <label class="form-check-label" for="q1option1" style="font-size: 18px;">Venus</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question1" id="q1option2" value="Mars">
                    <label class="form-check-label" for="q1option2" style="font-size: 18px;">Mars</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question1" id="q1option3" value="Merkurius">
                    <label class="form-check-label" for="q1option3" style="font-size: 18px;">Merkurius</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question1" id="q1option4" value="Jupiter">
                    <label class="form-check-label" for="q1option4" style="font-size: 18px;">Jupiter</label>
                </div>
        
                <!-- Soal 2 -->
                <p style="font-size: 18px; margin-bottom: 10px;">2. Mengapa Merkurius sulit untuk diamati dengan mata telanjang?</p>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question2" id="q2option1" value="Karena ukurannya yang besar">
                    <label class="form-check-label" for="q2option1" style="font-size: 18px;">Karena ukurannya yang besar</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question2" id="q2option2" value="Karena letaknya yang jauh dari Bumi">
                    <label class="form-check-label" for="q2option2" style="font-size: 18px;">Karena letaknya yang jauh dari Bumi</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question2" id="q2option3" value="Karena jaraknya yang dekat dengan Matahari">
                    <label class="form-check-label" for="q2option3" style="font-size: 18px;">Karena jaraknya yang dekat dengan Matahari</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question2" id="q2option4" value="Karena memiliki atmosfer yang tebal">
                    <label class="form-check-label" for="q2option4" style="font-size: 18px;">Karena memiliki atmosfer yang tebal</label>
                </div>
        
                <!-- Soal 3 -->
                <p style="font-size: 18px; margin-bottom: 10px;">3. Apa julukan lain yang diberikan kepada Merkurius karena kemunculannya di langit?</p>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question3" id="q3option1" value="Bintang pagi dan bintang sore">
                    <label class="form-check-label" for="q3option1" style="font-size: 18px;">Bintang pagi dan bintang sore</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question3" id="q3option2" value="Planet paling cerah">
                    <label class="form-check-label" for="q3option2" style="font-size: 18px;">Planet paling cerah</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question3" id="q3option3" value="Bintang malam dan bintang fajar">
                    <label class="form-check-label" for="q3option3" style="font-size: 18px;">Bintang malam dan bintang fajar</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question3" id="q3option4" value="Bintang terpanas">
                    <label class="form-check-label" for="q3option4" style="font-size: 18px;">Bintang terpanas</label>
                </div>
        
                <!-- Soal 4 -->
                <p style="font-size: 18px; margin-bottom: 10px;">4. Mengapa Merkurius tidak menjadi planet terpanas dalam Tata Surya meskipun berada dekat dengan Matahari?</p>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question4" id="q4option1" value="Karena ia tidak memiliki atmosfer">
                    <label class="form-check-label" for="q4option1" style="font-size: 18px;">Karena ia tidak memiliki atmosfer</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question4" id="q4option2" value="Karena suhu permukaannya dipengaruhi oleh letaknya">
                    <label class="form-check-label" for="q4option2" style="font-size: 18px;">Karena suhu permukaannya dipengaruhi oleh letaknya</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question4" id="q4option3" value="Karena atmosfernya yang tipis tidak mampu menahan energi Matahari">
                    <label class="form-check-label" for="q4option3" style="font-size: 18px;">Karena atmosfernya yang tipis tidak mampu menahan energi Matahari</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question4" id="q4option4" value="Karena tidak ada kehidupan di planet tersebut">
                    <label class="form-check-label" for="q4option4" style="font-size: 18px;">Karena tidak ada kehidupan di planet tersebut</label>
                </div>
        
                <!-- Soal 5 -->
                <p style="font-size: 18px; margin-bottom: 10px;">5. Apa yang dimaksud dengan atmosfer planet?</p>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question5" id="q5option1" value="Bagian dalam planet">
                    <label class="form-check-label" for="q5option1" style="font-size: 18px;">Bagian dalam planet</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question5" id="q5option2" value="Lapisan terluar planet">
                    <label class="form-check-label" for="q5option2" style="font-size: 18px;">Lapisan terluar planet</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question5" id="q5option3" value="Energi yang dipancarkan oleh planet">
                    <label class="form-check-label" for="q5option3" style="font-size: 18px;">Energi yang dipancarkan oleh planet</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question5" id="q5option4" value="Orbit planet di sekitar Matahari">
                    <label class="form-check-label" for="q5option4" style="font-size: 18px;">Orbit planet di sekitar Matahari</label>
                </div>
        
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Submit Answer</button>
                </div>
            </form>
        </div>
        
        <!-- Tombol navigasi dan scroll ke latihan serta game -->
        <div class="d-flex justify-content-between" style="margin-top: 40px;">
            <a href="venus" class="btn btn-secondary btn-lg">Sebelumnya</a>
            <a href="earth" class="btn btn-secondary btn-lg">Selanjutnya</a>
        </div>
        
    </div>
</div>
@endsection
