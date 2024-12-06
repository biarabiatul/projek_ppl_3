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
            background-image: url(assets/img/bgbr.png);
            background-size: cover; /* Mengatur gambar untuk menutupi seluruh area */
            background-position: center; /* Menjaga posisi gambar di tengah */
            background-repeat: no-repeat; /* Menghindari pengulangan gambar */
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

        .hero-section {
            text-align: center;
            padding: 40px 20px; /* Penambahan padding horizontal */
            /* background-color: rgba(249, 249, 249, 0.8); Menambahkan latar belakang transparan */
            border-radius: 8px; /* Membuat sudut lebih halus */
        }

        .title {
            font-size: 42px;
            font-weight: 600;
            color: #333;
            margin: 20px 0 10px; /* Menyelaraskan margin judul */
            margin-bottom: 2px;
            margin-top: -70px;
        }

        .subtitle {
            font-size: 20px;
            color: #555;
            margin: 5px 0; /* Menyelaraskan margin untuk subtitle */
        }

        .image-container img {
            width: 80%; /* Mengatur gambar menjadi 80% dari lebar halaman */
            height: auto; /* Memastikan aspek rasio tetap terjaga */
            margin: 10px 0; /* Menambahkan margin untuk gambar */
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
            background-color: #b19cd9;
        }

        @media (max-width: 768px) {
            .title {
                font-size: 32px;
            }

            .subtitle {
                font-size: 18px;
            }

            .image-container img {
                width: 100%; /* Menyesuaikan gambar untuk ukuran layar kecil */
                margin-bottom: 3px;
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
