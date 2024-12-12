<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="assets/img/logo-ulm.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

    <title>Materi</title>

    <link href="{{ asset('static/css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="#">
                    <span class="align-middle">SISTEM TATA SURYA</span>
                </a>
                <div class="sidebar-item">

                    <a class="sidebar-link" href="/home">
                        <img src="assets/img/students.png" style="width: 20px; height: 20px;">
                        <span class="align-middle">Daftar Siswa</span>
                    </a><br>

                    <a class="sidebar-link" data-bs-toggle="collapse" href="#submenu-sistem-tata-surya" role="button" aria-expanded="false" aria-controls="submenu-sistem-tata-surya">
                        <img src="assets/img/speedometer.png" style="width: 20px; height: 20px;">
                        <span class="align-middle">Rekap Nilai</span>
                    </a><br>
                    <div class="collapse" id="submenu-sistem-tata-surya"><br>
                        <ul class="list-unstyled fw-normal pb-1 small" style="padding-left: 20px;">
                            <li style="margin-bottom: 10px;"><a href="nilai_kuis" class="sidebar-link" style="padding-left: 10px;">Kuis</a></li>
                            <li style="margin-bottom: 10px;"><a href="#" class="sidebar-link" style="padding-left: 10px;">Evaluasi</a></li>
                    
                        </ul>
                    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                    <!-- Menampilkan nama pengguna yang login -->
                    <a class="sidebar-link-2" href="#">
                        <img src="assets/img/resume.png" style="width: 25px; height: 25px;">
                        <span class="align-middle">
                            @auth
                                {{ Auth::user()->name }} {{ Auth::user()->nisn }}
                            @else
                                Pengguna
                            @endauth
                        </span>
                    </a><br>

                </div>
            </div>
        </nav>

        <div class="main">
            @yield('container')
            <!-- <main class="content">
            </main> -->
        </div>
    </div>

    <script src="{{ asset('static/js/app.js') }}"></script>

</body>

</html>
