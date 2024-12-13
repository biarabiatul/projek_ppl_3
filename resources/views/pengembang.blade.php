<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tim Pengembang</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            background: url('/img/bg-regis.png') no-repeat center center fixed;
            background-size: cover;
        }

        .custom-img {
            display: block;
            margin: 0 auto;
            position: relative;
            top: 8px;
            width: 200px;
            height: 200px;
        }

        .card {
            background: rgba(255, 255, 255, 0.8);
            border: none;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar {
            background: rgba(255, 255, 255, 0.8);
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            justify-content: center;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand navbar-light navbar-bg">
        <span class="navbar-brand mb-0 h1 text-center">TIM PENGEMBANG</span>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-12 text-center">
                <p class="mb-4 text-white">Kami adalah mahasiswi program studi Pendidikan Komputer, Fakultas Keguruan dan Ilmu Pendidikan, Universitas Lambung Mangkurat</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- Pengembang 1 -->
            <div class="col-md-4 text-center mb-4">
                <div class="card">
                    <img src="assets/img/cindy.png" class="card-img-top custom-img" alt="Foto Pengembang 1">
                    <div class="card-body">
                        <h5 class="card-title">Cindy Junia Putri</h5>
                        <p class="card-text">Pengembang Frontend dengan keahlian dalam desain antarmuka yang responsif.</p>
                        <a href="https://www.instagram.com/ci.cindyjputri" class="btn btn-primary">Instagram</a>
                    </div>
                </div>
            </div>

            <!-- Pengembang 2 -->
            <div class="col-md-4 text-center mb-4">
                <div class="card">
                    <img src="assets/img/nova.png" class="card-img-top custom-img" alt="Foto Pengembang 2">
                    <div class="card-body">
                        <h5 class="card-title">Nova Nor Alizhafya</h5>
                        <p class="card-text">Pengembang Backend yang berpengalaman dalam membangun API yang handal dan aman.</p>
                        <a href="https://www.instagram.com/nvanralzhfya?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="btn btn-primary">Instagram</a>
                    </div>
                </div>
            </div>

            <!-- Pengembang 3 -->
            <div class="col-md-4 text-center mb-4">
                <div class="card">
                    <img src="assets/img/atul.png" class="card-img-top custom-img" alt="Foto Pengembang 3">
                    <div class="card-body">
                        <h5 class="card-title">Rabiatul Adawiyah</h5>
                        <p class="card-text">Manajer proyek yang memastikan setiap tahap pengembangan berjalan lancar dan tepat waktu.</p>
                        <a href="https://www.instagram.com/bia.rbtl?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="btn btn-primary">Instagram</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <button onclick="history.back()" class="btn btn-primary">Kembali</button>
        </div>
    </div>
</body>
</html>
