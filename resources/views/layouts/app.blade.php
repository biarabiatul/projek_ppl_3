<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login & Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Pengaturan background untuk halaman register dan lainnya */
        body {
            @if (Request::is('register*'))
                background-image: url('/img/bg-regis.png'); /* Background khusus halaman register */
            @else
                background-image: url('/img/default-bg.png'); /* Background berbeda untuk halaman lainnya */
            @endif
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }

        /* Kontainer Flex untuk gambar dan form */
        .form-image-container {
            display: flex;
            justify-content: center; /* Sesuaikan jika ingin kiri-kanan */
            align-items: center;
            gap: 30px; /* Jarak antara gambar dan form */
            width: 100%;
            max-width: 1000px;
        }

        /* Kontainer form */
        .form-container {
            flex: 1;
            background-color: rgba(255, 255, 255, 0.95); /* Warna background form, semi transparan */
            padding: 30px;
            border-radius: 15px; /* Sudut yang melengkung */
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2); /* Shadow untuk form */
            max-width: 800px; /* Batas lebar untuk form */
            margin: auto;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
        }

        /* Menu style */
        .menu {
            width: 150px;
            text-align: center;
        }

        .menu-item img {
            width: 100px;
            height: 100px;
            display: block;
            margin: 0 auto; /* Center gambar */
        }

        .menu-item p {
            font-weight: bold;
            font-size: 18px;
            margin-top: 10px;
        }

        /* Gaya list */
        .list-group-item {
            background-color: transparent;
            border: none;
            padding: 10px 0;
            margin-top: 10px;
        }

        .list-group-item strong {
            font-size: 16px;
        }

        /* Pengaturan gambar dalam list */
        .form-container img {
            max-width: 100%; /* Menjaga gambar agar tidak melebihi lebar kontainer */
            height: auto;
        }

        /* Tombol dengan gradient */
        .btn-primary {
            background-color: #6A5ACD;
            border-color: #4B0082;
        }
    </style>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center">
        @yield('content')
    </div>
</body>
</html>
