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
        <h2 style="font-size: 28px; margin-bottom: 20px;">Bumi</h2>
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
                <p style="font-size: 18px; margin-bottom: 10px;">1. Apa nama planet terdekat dengan Matahari?</p>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question1" id="q1option1" value="Venus">
                    <label class="form-check-label" for="q1option1" style="font-size: 18px;">A. Venus</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question1" id="q1option2" value="Mars">
                    <label class="form-check-label" for="q1option2" style="font-size: 18px;">B. Mars</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question1" id="q1option3" value="Merkurius">
                    <label class="form-check-label" for="q1option3" style="font-size: 18px;">C. Merkurius</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question1" id="q1option4" value="Jupiter">
                    <label class="form-check-label" for="q1option4" style="font-size: 18px;">D. Jupiter</label>
                </div>
        
                <!-- Soal 2 -->
                <p style="font-size: 18px; margin-bottom: 10px;">2. Mengapa Merkurius sulit untuk diamati dengan mata telanjang?</p>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question2" id="q2option1" value="Karena ukurannya yang besar">
                    <label class="form-check-label" for="q2option1" style="font-size: 18px;">A. Karena ukurannya yang besar</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question2" id="q2option2" value="Karena letaknya yang jauh dari Bumi">
                    <label class="form-check-label" for="q2option2" style="font-size: 18px;">B. Karena letaknya yang jauh dari Bumi</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question2" id="q2option3" value="Karena jaraknya yang dekat dengan Matahari">
                    <label class="form-check-label" for="q2option3" style="font-size: 18px;">C. Karena jaraknya yang dekat dengan Matahari</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question2" id="q2option4" value="Karena memiliki atmosfer yang tebal">
                    <label class="form-check-label" for="q2option4" style="font-size: 18px;">D. Karena memiliki atmosfer yang tebal</label>
                </div>
        
                <!-- Soal 3 -->
                <p style="font-size: 18px; margin-bottom: 10px;">3. Apa julukan lain yang diberikan kepada Merkurius karena kemunculannya di langit?</p>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question3" id="q3option1" value="Bintang pagi dan bintang sore">
                    <label class="form-check-label" for="q3option1" style="font-size: 18px;">A. Bintang pagi dan bintang sore</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question3" id="q3option2" value="Planet paling cerah">
                    <label class="form-check-label" for="q3option2" style="font-size: 18px;">B. Planet paling cerah</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question3" id="q3option3" value="Bintang malam dan bintang fajar">
                    <label class="form-check-label" for="q3option3" style="font-size: 18px;">C. Bintang malam dan bintang fajar</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question3" id="q3option4" value="Bintang terpanas">
                    <label class="form-check-label" for="q3option4" style="font-size: 18px;">D. Bintang terpanas</label>
                </div>
        
                <!-- Soal 4 -->
                <p style="font-size: 18px; margin-bottom: 10px;">4. Mengapa Merkurius tidak menjadi planet terpanas dalam Tata Surya meskipun berada dekat dengan Matahari?</p>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question4" id="q4option1" value="Karena ia tidak memiliki atmosfer">
                    <label class="form-check-label" for="q4option1" style="font-size: 18px;">A. Karena ia tidak memiliki atmosfer</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question4" id="q4option2" value="Karena suhu permukaannya dipengaruhi oleh letaknya">
                    <label class="form-check-label" for="q4option2" style="font-size: 18px;">B. Karena suhu permukaannya dipengaruhi oleh letaknya</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question4" id="q4option3" value="Karena atmosfernya yang tipis tidak mampu menahan energi Matahari">
                    <label class="form-check-label" for="q4option3" style="font-size: 18px;">C. Karena atmosfernya yang tipis tidak mampu menahan energi Matahari</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question4" id="q4option4" value="Karena tidak ada kehidupan di planet tersebut">
                    <label class="form-check-label" for="q4option4" style="font-size: 18px;">D. Karena tidak ada kehidupan di planet tersebut</label>
                </div>
        
                <!-- Soal 5 -->
                <p style="font-size: 18px; margin-bottom: 10px;">5. Apa yang dimaksud dengan atmosfer planet?</p>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question5" id="q5option1" value="Bagian dalam planet">
                    <label class="form-check-label" for="q5option1" style="font-size: 18px;">A. Bagian dalam planet</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question5" id="q5option2" value="Lapisan terluar planet">
                    <label class="form-check-label" for="q5option2" style="font-size: 18px;">B. Lapisan terluar planet</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question5" id="q5option3" value="Energi yang dipancarkan oleh planet">
                    <label class="form-check-label" for="q5option3" style="font-size: 18px;">C. Energi yang dipancarkan oleh planet</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="question5" id="q5option4" value="Orbit planet di sekitar Matahari">
                    <label class="form-check-label" for="q5option4" style="font-size: 18px;">D. Orbit planet di sekitar Matahari</label>
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
