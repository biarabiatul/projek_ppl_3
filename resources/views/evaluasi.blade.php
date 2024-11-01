@extends('layouts.materi')

@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <div class="navbar-collapse collapse">
        <div class="navbar-title">EVALUASI</div>
        <ul class="navbar-nav navbar-align">
            <!-- Your existing nav items here -->
        </ul>
    </div>
</nav>

<div class="container">
    <div class="materi-content">
        <h2>Evaluasi: 20 Soal Pilihan Ganda mengenai Sistem Tata Surya</h2>
        <form action="{{ route('submit-evaluasi') }}" method="POST">
            @csrf
            <ol>
                <li>
                    <strong>Apa yang dimaksud dengan Tata Surya?</strong><br>
                    <input type="radio" name="soal1" value="a"> a. Sistem planet yang mengelilingi bintang lain selain Matahari<br>
                    <input type="radio" name="soal1" value="b"> b. Sistem planet yang mengelilingi Matahari<br>
                    <input type="radio" name="soal1" value="c"> c. Kumpulan asteroid yang mengelilingi Bulan<br>
                    <input type="radio" name="soal1" value="d"> d. Gugus galaksi yang mengelilingi Bumi<br>
                </li>
                <li>
                    <strong>Planet manakah yang paling dekat dengan Matahari?</strong><br>
                    <input type="radio" name="soal2" value="a"> a. Venus<br>
                    <input type="radio" name="soal2" value="b"> b. Mars<br>
                    <input type="radio" name="soal2" value="c"> c. Merkurius<br>
                    <input type="radio" name="soal2" value="d"> d. Bumi<br>
                </li>
                <li>
                    <strong>Planet yang memiliki cincin paling mencolok di Tata Surya adalah...</strong><br>
                    <input type="radio" name="soal3" value="a"> a. Jupiter<br>
                    <input type="radio" name="soal3" value="b"> b. Saturnus<br>
                    <input type="radio" name="soal3" value="c"> c. Uranus<br>
                    <input type="radio" name="soal3" value="d"> d. Neptunus<br>
                </li>
                <li>
                    <strong>Planet apa yang disebut 'Planet Biru' karena tampilannya yang biru dari luar angkasa?</strong><br>
                    <input type="radio" name="soal4" value="a"> a. Mars<br>
                    <input type="radio" name="soal4" value="b"> b. Venus<br>
                    <input type="radio" name="soal4" value="c"> c. Uranus<br>
                    <input type="radio" name="soal4" value="d"> d. Bumi<br>
                </li>
                <li>
                    <strong>Planet yang dikenal memiliki kondisi atmosfer yang ekstrem dan sangat panas adalah...</strong><br>
                    <input type="radio" name="soal5" value="a"> a. Mars<br>
                    <input type="radio" name="soal5" value="b"> b. Venus<br>
                    <input type="radio" name="soal5" value="c"> c. Merkurius<br>
                    <input type="radio" name="soal5" value="d"> d. Saturnus<br>
                </li>
                <li>
                    <strong>Manakah yang bukan termasuk planet di Tata Surya?</strong><br>
                    <input type="radio" name="soal6" value="a"> a. Pluto<br>
                    <input type="radio" name="soal6" value="b"> b. Mars<br>
                    <input type="radio" name="soal6" value="c"> c. Neptunus<br>
                    <input type="radio" name="soal6" value="d"> d. Saturnus<br>
                </li>
                <li>
                    <strong>Urutan planet dari yang paling dekat hingga yang paling jauh dari Matahari adalah...</strong><br>
                    <input type="radio" name="soal7" value="a"> a. Merkurius, Venus, Bumi, Mars, Jupiter, Saturnus, Uranus, Neptunus<br>
                    <input type="radio" name="soal7" value="b"> b. Venus, Merkurius, Bumi, Mars, Jupiter, Saturnus, Uranus, Neptunus<br>
                    <input type="radio" name="soal7" value="c"> c. Bumi, Mars, Merkurius, Venus, Jupiter, Saturnus, Uranus, Neptunus<br>
                    <input type="radio" name="soal7" value="d"> d. Mars, Bumi, Venus, Merkurius, Jupiter, Saturnus, Uranus, Neptunus<br>
                </li>
                <li>
                    <strong>Planet terbesar di Tata Surya adalah...</strong><br>
                    <input type="radio" name="soal8" value="a"> a. Saturnus<br>
                    <input type="radio" name="soal8" value="b"> b. Uranus<br>
                    <input type="radio" name="soal8" value="c"> c. Bumi<br>
                    <input type="radio" name="soal8" value="d"> d. Jupiter<br>
                </li>
                <li>
                    <strong>Planet manakah yang dikenal sebagai 'Planet Merah'?</strong><br>
                    <input type="radio" name="soal9" value="a"> a. Mars<br>
                    <input type="radio" name="soal9" value="b"> b. Venus<br>
                    <input type="radio" name="soal9" value="c"> c. Saturnus<br>
                    <input type="radio" name="soal9" value="d"> d. Merkurius<br>
                </li>
                <li>
                    <strong>Fase apa yang terjadi ketika Bulan berada di antara Bumi dan Matahari?</strong><br>
                    <input type="radio" name="soal10" value="a"> a. Bulan Kuartal<br>
                    <input type="radio" name="soal10" value="b"> b. Bulan Purnama<br>
                    <input type="radio" name="soal10" value="c"> c. Bulan Baru<br>
                    <input type="radio" name="soal10" value="d"> d. Bulan Sabit<br>
                </li>
                <li>
                    <strong>Planet mana yang memiliki hari terpanjang dibandingkan planet lain di Tata Surya?</strong><br>
                    <input type="radio" name="soal11" value="a"> a. Jupiter<br>
                    <input type="radio" name="soal11" value="b"> b. Venus<br>
                    <input type="radio" name="soal11" value="c"> c. Merkurius<br>
                    <input type="radio" name="soal11" value="d"> d. Bumi<br>
                </li>
                <li>
                    <strong>Gerak planet pada sumbunya disebut sebagai...</strong><br>
                    <input type="radio" name="soal12" value="a"> a. Revolusi<br>
                    <input type="radio" name="soal12" value="b"> b. Rotasi<br>
                    <input type="radio" name="soal12" value="c"> c. Orbit<br>
                    <input type="radio" name="soal12" value="d"> d. Gravitasi<br>
                </li>
                <li>
                    <strong>Benda langit berikut ini bukanlah satelit alami:</strong><br>
                    <input type="radio" name="soal13" value="a"> a. Bulan<br>
                    <input type="radio" name="soal13" value="b"> b. Ganymede<br>
                    <input type="radio" name="soal13" value="c"> c. Titan<br>
                    <input type="radio" name="soal13" value="d"> d. Venus<br>
                </li>
                <li>
                    <strong>Berapa jumlah planet kerdil dalam Tata Surya yang diketahui saat ini?</strong><br>
                    <input type="radio" name="soal14" value="a"> a. 3<br>
                    <input type="radio" name="soal14" value="b"> b. 4<br>
                    <input type="radio" name="soal14" value="c"> c. 5<br>
                    <input type="radio" name="soal14" value="d"> d. 6<br>
                </li>
                <li>
                    <strong>Suhu di permukaan Venus diperkirakan mencapai...</strong><br>
                    <input type="radio" name="

soal15" value="a"> a. 460°C<br>
                    <input type="radio" name="soal15" value="b"> b. 330°C<br>
                    <input type="radio" name="soal15" value="c"> c. 200°C<br>
                    <input type="radio" name="soal15" value="d"> d. 100°C<br>
                </li>
                <li>
                    <strong>Apakah yang menyebabkan perbedaan musim di Bumi?</strong><br>
                    <input type="radio" name="soal16" value="a"> a. Revolusi Bumi dan kemiringan sumbu Bumi<br>
                    <input type="radio" name="soal16" value="b"> b. Rotasi Bumi<br>
                    <input type="radio" name="soal16" value="c"> c. Posisi Bumi di Tata Surya<br>
                    <input type="radio" name="soal16" value="d"> d. Adanya lapisan atmosfer<br>
                </li>
                <li>
                    <strong>Bulan adalah satelit alami dari planet...</strong><br>
                    <input type="radio" name="soal17" value="a"> a. Venus<br>
                    <input type="radio" name="soal17" value="b"> b. Mars<br>
                    <input type="radio" name="soal17" value="c"> c. Bumi<br>
                    <input type="radio" name="soal17" value="d"> d. Jupiter<br>
                </li>
                <li>
                    <strong>Planet yang memiliki waktu revolusi paling lama adalah...</strong><br>
                    <input type="radio" name="soal18" value="a"> a. Mars<br>
                    <input type="radio" name="soal18" value="b"> b. Uranus<br>
                    <input type="radio" name="soal18" value="c"> c. Saturnus<br>
                    <input type="radio" name="soal18" value="d"> d. Neptunus<br>
                </li>
                <li>
                    <strong>Atmosfer planet Mars sebagian besar terdiri atas...</strong><br>
                    <input type="radio" name="soal19" value="a"> a. Oksigen<br>
                    <input type="radio" name="soal19" value="b"> b. Karbon dioksida<br>
                    <input type="radio" name="soal19" value="c"> c. Hidrogen<br>
                    <input type="radio" name="soal19" value="d"> d. Nitrogen<br>
                </li>
                <li>
                    <strong>Arah rotasi Venus berbeda dari planet lainnya. Arah ini disebut...</strong><br>
                    <input type="radio" name="soal20" value="a"> a. Prograde<br>
                    <input type="radio" name="soal20" value="b"> b. Retrograde<br>
                    <input type="radio" name="soal20" value="c"> c. Rotasi terbalik<br>
                    <input type="radio" name="soal20" value="d"> d. Rotasi sempurna<br>
                </li>
            </ol>
            <button type="submit" class="btn btn-primary">Kirim Jawaban</button>
        </form>
    </div>
</div>
@endsection
