<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login & Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            @if (Request::is('register*'))
                background-image: url('/img/bg-regis.png'); /* Background khusus halaman register */
            @else
                background-image: url('/img/'); /* Background berbeda untuk halaman login */
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
            justify-content: center;
            align-items: center;
            gap: 30px; /* Jarak antara gambar dan form */
            width: 100%;
            max-width: 900px;
        }

        /* Kontainer form */
        .form-container {
            flex: 1;
            background-color: rgba(255, 255, 255, 0.9); /* Warna background form, semi transparan */
            padding: 30px;
            border-radius: 15px; /* Sudut yang melengkung */
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2); /* Shadow untuk form */
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
        }

        /* Tombol login dengan gradient */
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
