<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Tata Surya</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: "Poppins", sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        .navbar-custom {
            background-color: #5a2b91;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-custom .navbar-brand, 
        .navbar-custom .nav-link {
            color: white;
        }

        .navbar-custom .nav-link:hover {
            color: #b19cd9;
        }

        .title {
            font-size: 42px;
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
            text-align: left;
        }

        .subtitle {
            font-size: 20px;
            color: #555;
            margin-bottom: 10px;
        }

        .btn-custom {
            background-color: #5a2b91;
            color: white;
            padding: 10px 30px;
            font-size: 18px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #b19cd9;
        }

        .curve-divider {
            width: 100%;
            height: 100px;
            background-color: #5a2b91;
            position: relative;
        }

        .curve-divider::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: #f9f9f9;
            border-radius: 0 0 100% 100%;
        }

        .info-section {
            padding: 60px 20px;
            background-color: #fff;
        }

        .info-section h2 {
            font-size: 32px;
            color: #5a2b91;
            margin-bottom: 40px;
            text-align: center;
        }

        .info-section p {
            font-size: 18px;
            color: #333;
            margin-bottom: 5px;
        }

        .info-section img {
            width: 100%;
            max-width: 280px;
            border-radius: 10px;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        .info-section img:hover {
            transform: scale(1.05);
        }

        .action-buttons {
            margin-top: 30px;
            text-align: center;
        }

        .row.align-items-center {
            gap: 20px;
            margin-bottom: 40px;
        }

        .content {
            max-width: 600px;
        }

        .hero-section {
            padding: 60px 0;
        }

        .hero-section .content {
            padding-right: 40px;
        }

        .hero-section .image-container img {
            max-width: 400px;
        }

        @media (max-width: 768px) {
            .info-section .row {
                text-align: center;
            }

            .info-section img {
                margin: 0 auto;
            }

            .hero-section .content {
                padding-right: 0;
                text-align: center;
            }

            .hero-section .image-container img {
                max-width: 100%;
            }
        }

    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sistem Tata Surya</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#informasi-menarik">Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login Guru</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="container hero-section d-flex align-items-center justify-content-between my-5">
        <div class="content">
            <h1 class="title">SELAMAT DATANG</h1>
            <p class="subtitle">Media Pembelajaran Interaktif Berbasis Web Sistem Tata Surya</p>
            <p>Untuk SMP Kelas VII</p>
            <a href="#informasi-menarik" class="btn btn-custom">Masuk</a>
        </div>
        <div class="image-container">
             <img src='assets/img/imageq.png' alt="Gambar Jupiter">
        </div>
    </div>

    <!-- Ornamen lengkung -->
    <div class="curve-divider"></div>

    <!-- Info Section -->
    <div id="informasi-menarik" class="info-section">
        <h2>Belajar Jadi Seru!</h2>

        <!-- Materi Lengkap -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src='assets/img/buku.png' alt="Gambar Materi Lengkap">
            </div>
            <div class="col-md-6">
                <p><strong>Materi Lengkap:</strong> Semua pelajaran disajikan dengan cara yang mudah dipahami.</p>
            </div>
        </div>

        <!-- Game Edukatif -->
        <div class="row align-items-center">
            <div class="col-md-6 order-md-2">
                <img src='assets/img/game.png' alt="Gambar Game Edukatif">
            </div>
            <div class="col-md-6 order-md-1">
                <p><strong>Game Edukatif:</strong> Asah kemampuan sambil main game interaktif yang bikin belajar jadi lebih seru.</p>
            </div>
        </div>

        <!-- Evaluasi Menarik -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src='assets/img/evaluasi.png' alt="Gambar Evaluasi Menarik">
            </div>
            <div class="col-md-6">
                <p><strong>Evaluasi Menarik:</strong> Uji pemahaman kamu dengan kuis dan evaluasi yang seru, nggak bikin stres!</p>
            </div>
        </div>

        <p>Yuk, jadikan belajar lebih menyenangkan dan interaktif! Cocok untuk anak-anak SMP yang pengen belajar sambil main!</p>

        <!-- Tombol untuk Login dan Register -->
        <div class="action-buttons mt-4">
            <a href="login" class="btn btn-custom mx-2">Login</a>
            <a href="register.html" class="btn btn-custom mx-2">Register</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
