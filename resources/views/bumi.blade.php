@extends('layouts.materi')

@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <div class="navbar-collapse collapse">
        <div class="navbar-title">BUMI</div>
        <ul class="navbar-nav navbar-align">
            <!-- Your existing nav items here -->
        </ul>
    </div>
</nav>

<div class="container">

    <!-- Div baru untuk isi materi -->
    <div class="materi-content" style="font-size: 18px; line-height: 1.8; padding: 20px;">
        <h2 style="font-size: 28px; margin-bottom: 20px;">Bumi</h2>
        <p style="margin-bottom: 20px;">
            Selamat datang di rumah kita. Bumi tempat tinggal 
            kita ini merupakan planet di urutan ketiga dalam Tata 
            Surya. Lapisan atmosfer yang terdiri atas nitrogen, 
            oksigen, dan berbagai gas lain dalam jumlah yang 
            tepat menjadikan udara Bumi sempurna untuk kita 
            dan makhluk hidup lainnya. Lapisan atmosfer juga 
            melindungi kita dari berbagai marabahaya di luar 
            sana, seperti meteorit maupun energi Matahari yang 
            berlebihan.
        </p>
        
        <h3 style="font-size: 24px; margin-bottom: 15px;">Karakteristik Bumi</h3>
        <table class="table table-bordered" style="width: 100%; font-size: 18px;">
            <tr>
                <th style="padding: 10px;">Massa</th>
                <td style="padding: 10px;">5.980.000.000.000.000.000.000.000 kg</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Satelit</th>
                <td style="padding: 10px;"> 1 (disebut Bulan)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Diameter</th>
                <td style="padding: 10px;">12.756 km</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Kandungan</th>
                <td style="padding: 10px;">78% nitrogen, 21% oksigen, 1%
                    karbon dioksida, argon dan uap air 
                   serta gas lain </td>
            </tr>
            <tr>
                <th style="padding: 10px;">Gravitasi</th>
                <td style="padding: 10px;">9,807 m/s2 (1,0 kali gravitasi Bumi)  </td>
            </tr>
            <tr>
                <th style="padding: 10px;">Suhu di Permukaan</th>
                <td style="padding: 10px;">Sekitar 22°C</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Periode Rotasi</th>
                <td style="padding: 10px;">1 hari (ukuran Bumi)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Jarak dari Matahari</th>
                <td style="padding: 10px;">149.600.000 km atau 1 SA (Satuan Astronomi)</td>
            </tr>
            <tr>
                <th style="padding: 10px;">Periode Revolusi</th>
                <td style="padding: 10px;">365,25 hari (ukuran Bumi)</td>
            </tr>
        </table>

        <!-- Tombol untuk scroll ke latihan dan game -->
        <div style="margin-top: 30px;">
            <a href="jupiter-latihan" class="btn btn-primary">Ke Latihan</a>
            <a href="jupiter-game" class="btn btn-info">Ke Game</a>
        </div>

</div>
@endsection
