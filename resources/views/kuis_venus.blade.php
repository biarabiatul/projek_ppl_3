@extends('layouts.materi')

@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <div class="navbar-collapse collapse">
        <div class="navbar-title">KUIS VENUS</div>
    </div>
</nav>

<div class="container mt-4">
    <div class="row">
        <!-- Kolom Pertanyaan -->
        <div class="col-lg-8 col-md-12">
            <!-- Pertanyaan kuis -->
            <div class="quiz-question border p-3 rounded mb-4" style="font-size: 20px; line-height: 1.6;">
                <p><strong>Pertanyaan 1</strong></p>
                <p>Planet apa yang memiliki suhu permukaan terpanas di Tata Surya?</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question1" id="q1a1">
                    <label class="form-check-label" for="q1a1">a. Bumi</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question1" id="q1a2">
                    <label class="form-check-label" for="q1a2">b. Mars</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question1" id="q1a3">
                    <label class="form-check-label" for="q1a3">c. Venus</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question1" id="q1a4">
                    <label class="form-check-label" for="q1a4">d. Merkurius</label>
                </div>
            </div>

            <div class="quiz-question border p-3 rounded mb-4" style="font-size: 20px; line-height: 1.6;">
                <p><strong>Pertanyaan 2</strong></p>
                <p>Apa yang menyebabkan suhu di permukaan Venus sangat panas?</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question2" id="q2a1">
                    <label class="form-check-label" for="q2a1">a. Rotasi planet yang lambat</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question2" id="q2a2">
                    <label class="form-check-label" for="q2a2">b. Kandungan karbon dioksida di atmosfer</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question2" id="q2a3">
                    <label class="form-check-label" for="q2a3">c. Jarak yang terlalu jauh dari Matahari</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question2" id="q2a4">
                    <label class="form-check-label" for="q2a4">d. Lapisan atmosfer yang tipis</label>
                </div>
            </div>

            <div class="quiz-question border p-3 rounded mb-4" style="font-size: 20px; line-height: 1.6;">
                <p><strong>Pertanyaan 3</strong></p>
                <p>Berapa lama waktu yang diperlukan Venus untuk melakukan rotasi penuh?</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question3" id="q3a1">
                    <label class="form-check-label" for="q3a1">a. 24 jam</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question3" id="q3a2">
                    <label class="form-check-label" for="q3a2">b. 243 hari</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question3" id="q3a3">
                    <label class="form-check-label" for="q3a3">c. 225 hari</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question3" id="q3a4">
                    <label class="form-check-label" for="q3a4">d. 30 hari</label>
                </div>
            </div>

            <div class="quiz-question border p-3 rounded mb-4" style="font-size: 20px; line-height: 1.6;">
                <p><strong>Pertanyaan 4</strong></p>
                <p>Apa yang dimaksud dengan gerak retrograde pada planet Venus?</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question4" id="q4a1">
                    <label class="form-check-label" for="q4a1">a. Gerak berputar dari barat ke timur</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question4" id="q4a2">
                    <label class="form-check-label" for="q4a2">b. Gerak berputar dari timur ke barat</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question4" id="q4a3">
                    <label class="form-check-label" for="q4a3">c. Gerak berputar searah dengan rotasi planet</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question4" id="q4a4">
                    <label class="form-check-label" for="q4a4">d. Gerak berputar dengan kecepatan konstan</label>
                </div>
            </div>

            <div class="quiz-question border p-3 rounded mb-4" style="font-size: 20px; line-height: 1.6;">
                <p><strong>Pertanyaan 5</strong></p>
                <p>Venus dikenal sebagai planet apa?</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question5" id="q5a1">
                    <label class="form-check-label" for="q5a1">a. Planet Merah</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question5" id="q5a2">
                    <label class="form-check-label" for="q5a2">b. Bintang Pagi</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question5" id="q5a3">
                    <label class="form-check-label" for="q5a3">c. Planet Biru</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question5" id="q5a4">
                    <label class="form-check-label" for="q5a4">d. Planet Cincin</label>
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
    const kunciJawaban = {
        question1: "c. Venus",
        question2: "b. Kandungan karbon dioksida di atmosfer",
        question3: "b. 243 hari",
        question4: "b. Gerak berputar dari timur ke barat",
        question5: "b. Bintang Pagi"
    };

    // Fungsi untuk mengubah warna tombol navigasi
    function updateNavigation(questionNumber) {
        const navButton = document.getElementById(`nav${questionNumber}`);
        navButton.classList.remove('btn-outline-secondary');
        navButton.classList.add('btn-success');
    }

    // Tambahkan event listener ke semua input radio
    document.querySelectorAll('input[type="radio"]').forEach((radio) => {
        radio.addEventListener('change', (event) => {
            const questionName = event.target.name;
            const questionNumber = questionName.replace('question', '');
            updateNavigation(questionNumber);
        });
    });

    // Tambahkan event listener untuk tombol Submit
    document.getElementById('submitQuiz').addEventListener('click', () => {
    const answers = {};
    let allAnswered = true;
    let score = 0; // Variabel untuk menyimpan skor

    // Iterasi melalui pertanyaan untuk mengambil jawaban
    for (let i = 1; i <= 5; i++) {
        const selected = document.querySelector(`input[name="question${i}"]:checked`);
        if (selected) {
            const answer = selected.nextElementSibling.textContent.trim();
            answers[`question${i}`] = answer;

            // Periksa jawaban dengan kunci jawaban
            if (answer === kunciJawaban[`question${i}`]) {
                score++; // Tambahkan skor jika jawaban benar
            }
        } else {
            allAnswered = false; // Jika ada pertanyaan yang belum dijawab
        }
    }

    // Periksa apakah semua pertanyaan telah dijawab
    if (!allAnswered) {
        alert('Harap jawab semua pertanyaan sebelum submit.');
    } else {
        // Tampilkan dialog konfirmasi
        const userConfirmed = confirm('Apakah Anda yakin ingin submit jawaban Anda?');

        if (userConfirmed) {
            // Tampilkan hasil skor
            alert(`Jawaban Anda telah terkumpul. Skor Anda: ${score} dari 5`);
            console.log('Jawaban:', answers);

            // Redirect ke halaman materi
            window.location.href = "/venus"; // Ganti "/materi" dengan URL yang sesuai
        } else {
            console.log('Submit dibatalkan oleh pengguna.');
        }
    }
});
    
</script>

@endsection
