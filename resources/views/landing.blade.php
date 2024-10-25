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
            margin:0;
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
            padding: 10px 80px;
            font-size: 18px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-bottom: 50px;
        }
        .action-buttons {
            display: flex;
            justify-content: center;
            align-items: center;
            /*margin-top: 80%; /* Atur jarak vertikal */
            /* margin-bottom: 90px; */
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
            background-image: url("assets/img/bgbaru.png"); /* Tambahkan gambar latar */
            background-size: cover; /* Pastikan gambar menutupi seluruh area */
            background-position: center; /* Posisi gambar di tengah */
            background-repeat: no-repeat; /* Gambar tidak diulang */
            color: white; /* Mengubah warna teks agar kontras dengan background */
        }

        .info-section img {
            display: block;
            margin: 0 auto;
            width: 100%; /* Pastikan gambar memiliki lebar penuh */
            max-width: 1250px; /* Tentukan ukuran maksimum gambar */
            border-radius: 10px;
            transition: transform 0.3s ease;
            margin-top: 0px;
            margin-bottom: 100px;
        }

        .info-section img:hover {
            transform: scale(1.05);
        }

        .info-section h2, .info-section p {
            text-align: center;
        }

        .action-buttons {
            margin-top: 30px;
            text-align: center;
        }

        @media (max-width: 768px) {
            .info-section img {
                max-width: 100%;
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
                        <a class="nav-link" href="login/siswa">Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login/guru">Login Guru</a>
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
            <img src="assets/img/imageq.png" alt="Gambar Jupiter">
        </div>
    </div>

    <!-- Ornamen lengkung -->
    <div class="curve-divider"></div>

    <!-- Info Section -->
    <div id="informasi-menarik" class="info-section">
        <h2>Belajar Jadi Seru!</h2>

        <!-- Gambar Menarik di tengah -->
        <div class="row align-items-center justify-content-center" style="min-height: 400px;">
            <div class="col-md-12 text-center">
                <img src="assets/img/bagus.png" alt="Gambar Bagus" class="img-fluid" style="max-width: 80%; margin-top: 70px;">
            </div>
        </div>
        

        <!-- Tombol untuk Login dan Register -->
        <div class="action-buttons" style="margin-top: -70px;">
            <a href="login/siswa" class="btn btn-custom mx-2">Login</a>
            <a href="register/siswa" class="btn btn-custom mx-2">Register</a>
        </div>
        
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
