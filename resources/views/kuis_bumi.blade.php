@extends('layouts.materi')

@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <div class="navbar-collapse collapse">
        <div class="navbar-title">KUIS BUMI</div>
    </div>
</nav>

<div class="container mt-4">
    <div class="row">
        <!-- Kolom Pertanyaan -->
        <div class="col-lg-8 col-md-12">
            <!-- Pertanyaan kuis -->
            <div class="quiz-question border p-3 rounded mb-4" style="font-size: 20px; line-height: 1.6;">
                <p><strong>Pertanyaan 1</strong></p>
                <p>Apa urutan posisi Bumi dalam Tata Surya berdasarkan jaraknya dari Matahari?</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question1" id="q1a1">
                    <label class="form-check-label" for="q1a1">a. Pertama</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question1" id="q1a2">
                    <label class="form-check-label" for="q1a2">b. Kedua</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question1" id="q1a3">
                    <label class="form-check-label" for="q1a3">c. Ketiga</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question1" id="q1a4">
                    <label class="form-check-label" for="q1a4">d. Keempat</label>
                </div>
            </div>

            <div class="quiz-question border p-3 rounded mb-4" style="font-size: 20px; line-height: 1.6;">
                <p><strong>Pertanyaan 2</strong></p>
                <p>Berapa panjang periode revolusi Bumi?</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question2" id="q2a1">
                    <label class="form-check-label" for="q2a1">a. 24 jam</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question2" id="q2a2">
                    <label class="form-check-label" for="q2a2">b. 365,25 hari</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question2" id="q2a3">
                    <label class="form-check-label" for="q2a3">c. 30 hari</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question2" id="q2a4">
                    <label class="form-check-label" for="q2a4">d. 12 bulan</label>
                </div>
            </div>

            <div class="quiz-question border p-3 rounded mb-4" style="font-size: 20px; line-height: 1.6;">
                <p><strong>Pertanyaan 3</strong></p>
                <p>Apa gas utama yang ada di atmosfer Bumi?</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question3" id="q3a1">
                    <label class="form-check-label" for="q3a1">a. Karbon dioksida</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question3" id="q3a2">
                    <label class="form-check-label" for="q3a2">b. Oksigen</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question3" id="q3a3">
                    <label class="form-check-label" for="q3a3">c. Nitrogen</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question3" id="q3a4">
                    <label class="form-check-label" for="q3a4">d. Argon</label>
                </div>
            </div>

            <div class="quiz-question border p-3 rounded mb-4" style="font-size: 20px; line-height: 1.6;">
                <p><strong>Pertanyaan 4</strong></p>
                <p>Berapa suhu rata-rata di permukaan Bumi?</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question4" id="q4a1">
                    <label class="form-check-label" for="q4a1">a. 22°C</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question4" id="q4a2">
                    <label class="form-check-label" for="q4a2">b. 25°C</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question4" id="q4a3">
                    <label class="form-check-label" for="q4a3">c. 30°C</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question4" id="q4a4">
                    <label class="form-check-label" for="q4a4">d. 18°C</label>
                </div>
            </div>

            <div class="quiz-question border p-3 rounded mb-4" style="font-size: 20px; line-height: 1.6;">
                <p><strong>Pertanyaan 5</strong></p>
                <p>Apa yang dimaksud dengan gravitasi Bumi?</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question5" id="q5a1">
                    <label class="form-check-label" for="q5a1">a. Gaya tarik Bumi terhadap benda</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question5" id="q5a2">
                    <label class="form-check-label" for="q5a2">b. Gaya tolak Bumi terhadap benda</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question5" id="q5a3">
                    <label class="form-check-label" for="q5a3">c. Gaya Bumi yang mempengaruhi atmosfer</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question5" id="q5a4">
                    <label class="form-check-label" for="q5a4">d. Gaya yang berasal dari Matahari</label>
                </div>
            </div>
        </div>

        <!-- Kolom Quiz Navigation -->
        <div class="col-lg-4 col-md-12">
            <div class="quiz-navigation border p-3 rounded">
                <h5 class="text-center mb-3">Quiz Navigation</h5>
                <div class="d-flex flex-wrap justify-content-center">
                    <button id="nav1" class="btn btn-outline-secondary m-1">1</button>
                    <button id="nav2" class="btn btn-outline-secondary m-1">2</button>
                    <button id="nav3" class="btn btn-outline-secondary m-1">3</button>
                    <button id="nav4" class="btn btn-outline-secondary m-1">4</button>
                    <button id="nav5" class="btn btn-outline-secondary m-1">5</button>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-link">Show one page at a time</a><br>
                    <a href="#" class="btn btn-link">Finish review</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="quiz-question border p-3 rounded mb-4" style="font-size: 20px; line-height: 1.6;">
    <button id="submitQuiz" class="btn btn-primary">Submit</button>
</div>

<script>
    // Kunci jawaban untuk kuis
    const correctAnswers = {
        question1: "b", // Kedua
        question2: "b", // 365,25 hari
        question3: "c", // Nitrogen
        question4: "a", // 22°C
        question5: "a"  // Gaya tarik Bumi terhadap benda
    };

    document.getElementById("submitQuiz").addEventListener("click", function () {
        let score = 0;
        let totalQuestions = 5;

        // Menilai jawaban
        for (let i = 1; i <= totalQuestions; i++) {
            let selectedOption = document.querySelector(`input[name="question${i}"]:checked`);
            if (selectedOption && selectedOption.id.includes(correctAnswers[`question${i}`])) {
                score++;
            }
        }

        // Menampilkan hasil
        alert(`Your score: ${score} out of ${totalQuestions}`);
    });
</script>
@endsection
