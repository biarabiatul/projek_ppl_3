@extends('layouts.materi')

@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <div class="navbar-collapse collapse">
        <div class="navbar-title">KUIS</div>
    </div>
</nav>

<div class="container mt-4">
    <div class="row">
        <!-- Kolom Pertanyaan -->
        <div class="col-lg-8 col-md-12">
            <!-- Pertanyaan kuis -->
            <div class="quiz-question border p-3 rounded mb-4" style="font-size: 20px; line-height: 1.6;">
                <p><strong>Pertanyaan 1</strong></p>
                <p>Merkurius adalah planet terdekat dengan .....?</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question1" id="q1a1">
                    <label class="form-check-label" for="q1a1">a. Bumi</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question1" id="q1a2">
                    <label class="form-check-label" for="q1a2">b. Matahari</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question1" id="q1a3">
                    <label class="form-check-label" for="q1a3">c. Mars</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question1" id="q1a4">
                    <label class="form-check-label" for="q1a4">d. Jupiter</label>
                </div>
            </div>

            <div class="quiz-question border p-3 rounded mb-4" style="font-size: 20px; line-height: 1.6;">
                <p><strong>Pertanyaan 2</strong></p>
                <p>Berapa lama waktu revolusi Merkurius mengelilingi Matahari?</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question2" id="q2a1">
                    <label class="form-check-label" for="q2a1">a. 88 hari</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question2" id="q2a2">
                    <label class="form-check-label" for="q2a2">b. 365 hari</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question2" id="q2a3">
                    <label class="form-check-label" for="q2a3">c. 225 hari</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question2" id="q2a4">
                    <label class="form-check-label" for="q2a4">d. 100 hari</label>
                </div>
            </div>

            <div class="quiz-question border p-3 rounded mb-4" style="font-size: 20px; line-height: 1.6;">
                <p><strong>Pertanyaan 3</strong></p>
                <p>Apakah Merkurius memiliki atmosfer yang tebal?</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question3" id="q3a1">
                    <label class="form-check-label" for="q3a1">a. Ya</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question3" id="q3a2">
                    <label class="form-check-label" for="q3a2">b. Tidak</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question3" id="q3a3">
                    <label class="form-check-label" for="q3a3">c. Mungkin</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question3" id="q3a4">
                    <label class="form-check-label" for="q3a4">d. Tidak diketahui</label>
                </div>
            </div>

            <div class="quiz-question border p-3 rounded mb-4" style="font-size: 20px; line-height: 1.6;">
                <p><strong>Pertanyaan 4</strong></p>
                <p>Temperatur di permukaan Merkurius bisa mencapai ..... di siang hari.</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question4" id="q4a1">
                    <label class="form-check-label" for="q4a1">a. 100°C</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question4" id="q4a2">
                    <label class="form-check-label" for="q4a2">b. 430°C</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question4" id="q4a3">
                    <label class="form-check-label" for="q4a3">c. 200°C</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question4" id="q4a4">
                    <label class="form-check-label" for="q4a4">d. 50°C</label>
                </div>
            </div>

            <div class="quiz-question border p-3 rounded mb-4" style="font-size: 20px; line-height: 1.6;">
                <p><strong>Pertanyaan 5</strong></p>
                <p>Merkurius tidak memiliki satelit alami. Benar atau salah?</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question5" id="q5a1">
                    <label class="form-check-label" for="q5a1">a. Benar</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question5" id="q5a2">
                    <label class="form-check-label" for="q5a2">b. Salah</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question5" id="q5a3">
                    <label class="form-check-label" for="q5a3">c. Tidak pasti</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question5" id="q5a4">
                    <label class="form-check-label" for="q5a4">d. Kadang memiliki</label>
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
        question1: "b. Matahari",
        question2: "a. 88 hari",
        question3: "b. Tidak",
        question4: "b. 430°C",
        question5: "a. Benar"
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
            window.location.href = "/merkurius"; // Ganti "/materi" dengan URL yang sesuai
        } else {
            console.log('Submit dibatalkan oleh pengguna.');
        }
    }
});
    
</script>

@endsection

