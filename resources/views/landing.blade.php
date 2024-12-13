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
            margin: 0;
            padding: 0;
            height: 100vh;
            overflow: hidden; /* Menghindari scroll */
            background-color: #ffffff; /* Background putih */
        }

        html {
            scroll-behavior: smooth;
        }

        .navbar-custom {
            background: linear-gradient(to right, #5a2b91, #b19cd9);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-custom .navbar-brand, 
        .navbar-custom .nav-link {
            color: white;
            transition: color 0.3s ease, background-color 0.3s ease;
        }

        .navbar-custom .nav-link:hover {
            color: #5a2b91;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
            padding: 5px 10px;
        }

        /* Background Langit Gelap dengan Bintang */
        .stars {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, #ffbf00 1px, transparent 1px); /* Bintang kuning */
            background-size: 50px 50px; /* Ukuran bintang */
            animation: stars 50s linear infinite;
        }

        @keyframes stars {
            0% {
                transform: translateY(0); /* Posisi awal */
            }
            100% {
                transform: translateY(100%); /* Posisi akhir */
            }
        }

        .falling-stars {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .falling-stars div {
            position: absolute;
            background-color: #ffbf00; /* Bintang jatuh  */
            width: 5px;
            height: 10px;
            opacity: 0.7;
            animation: falling 5s linear infinite;
        }

        /* Efek Bintang Jatuh yang lebih lambat */
        @keyframes falling {
            0% {
                transform: translateY(-100vh);
                opacity: 1;
            }
            100% {
                transform: translateY(100vh);
                opacity: 0;
            }
        }

        .falling-stars div:nth-child(1) {
            animation-duration: 7s;
            animation-delay: 0s;
            left: 10%;
        }

        .falling-stars div:nth-child(2) {
            animation-duration: 8s;
            animation-delay: 1s;
            left: 25%;
        }

        .falling-stars div:nth-child(3) {
            animation-duration: 10s;
            animation-delay: 2s;
            left: 40%;
        }

        .falling-stars div:nth-child(4) {
            animation-duration: 9s;
            animation-delay: 3s;
            left: 55%;
        }

        .falling-stars div:nth-child(5) {
            animation-duration: 7s;
            animation-delay: 4s;
            left: 70%;
        }

        .falling-stars div:nth-child(6) {
            animation-duration: 11s;
            animation-delay: 5s;
            left: 80%;
        }

        /* Hero Section */
        .hero-section {
            text-align: center;
            padding: 40px 20px; 
            position: relative;
            z-index: 2; /* Agar tetap di atas background */
        }

        .title {
            font-size: 42px;
            font-weight: 600;
            color: #000;
            margin: 20px 0 10px;
            margin-bottom: 2px;
            margin-top: -70px;
        }

        .subtitle {
            font-size: 20px;
            color: #333;
            margin: 5px 0;
        }

        .image-container img {
            width: 80%; /* Mengatur gambar menjadi 80% dari lebar halaman */
            height: auto; 
            margin: 10px 0;
        }

        .btn-custom {
            background-color: #5a2b91;
            color: white;
            padding: 10px 80px;
            font-size: 18px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        .btn-custom:hover {
            background-color: #5a2b91;
        }

        @media (max-width: 768px) {
            .title {
                font-size: 32px;
            }

            .subtitle {
                font-size: 18px;
            }

            .image-container img {
                width: 100%; 
                margin-bottom: 3px;
            }
        }
    </style>
</head>
<body>

    <!-- Background Bintang -->
    <div class="stars"></div>
    <div class="falling-stars">
        <!-- Bintang jatuh -->
        <div style="top: 5%;"></div>
        <div style="top: 15%;"></div>
        <div style="top: 25%;"></div>
        <div style="top: 35%;"></div>
        <div style="top: 45%;"></div>
        <div style="top: 55%;"></div>
    </div>

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
                        <a class="nav-link" href="pengembang">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login/siswa">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login/siswa">Masuk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="container hero-section my-5">
        <div class="content">
            <h1 class="title">SELAMAT DATANG</h1>
            <p class="subtitle">Media Pembelajaran Interaktif Berbasis Web</p>
            <p class="subtitle">Materi Tata Surya Untuk SMP Kelas VII</p>
        </div>
        <div class="image-container">
            <img src="{{ asset('assets/img/newbgt.png') }}" alt="Gambar Jupiter">
        </div>
        <div class="content">
            <p class="subtitle">Yuk, jadikan belajar lebih menyenangkan dan interaktif! Belajar sambil bermain!</p>
        </div>
        <div>
            <a href="login/siswa" class="btn btn-custom">Mulai</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap
