@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="form-image-container">
    
    <!-- Menu (Icon Capaian Pembelajaran) -->
    <div class="menu text-center mb-4">
      <div class="menu-item">
        <!-- <img src="{{ asset('img/cp1.png') }}" alt="Icon Capaian Pembelajaran" width="100" class="img-fluid mb-3"> -->
        <p class="fw-bold fs-5">Capaian Pembelajaran</p>
      </div>
    </div>

    <!-- Konten Utama (Deskripsi Capaian Pembelajaran) -->
    <div class="form-container" style="margin-top: 20px;">
      <h2 class="text-center mb-4">Capaian Pembelajaran</h2>
      <ul class="list-group list-group-flush">
        <!-- Capaian Pembelajaran dengan Gambar di Bawah -->
        <li class="list-group-item" > <!-- Tambahkan margin-top khusus untuk item pertama -->

        <img src="{{ asset('img/wh.png') }}" alt="Posisi Bumi dalam Tata Surya" class="mt-3 img-fluid" width="5000" >
        <img src="{{ asset('img/wh.png') }}" alt="Posisi Bumi dalam Tata Surya" class="mt-3 img-fluid" width="5000" >
        <img src="{{ asset('img/wh.png') }}" alt="Posisi Bumi dalam Tata Surya" class="mt-3 img-fluid" width="200" >
        <img src="{{ asset('img/wh.png') }}" alt="Posisi Bumi dalam Tata Surya" class="mt-3 img-fluid" width="700" >  
        <img src="{{ asset('img/wh.png') }}" alt="Posisi Bumi dalam Tata Surya" class="mt-3 img-fluid" width="300" >
        <img src="{{ asset('img/wh.png') }}" alt="Posisi Bumi dalam Tata Surya" class="mt-3 img-fluid" width="500" >
        <img src="{{ asset('img/wh.png') }}" alt="Posisi Bumi dalam Tata Surya" class="mt-3 img-fluid" width="500" >
          <div>
            <strong>1. Memahami Posisi Bumi dalam Tata Surya:</strong> Siswa diharapkan memahami Bumi sebagai bagian dari Tata Surya yang terdiri dari Matahari, planet-planet, satelit, asteroid, komet, dan benda langit lainnya yang saling memengaruhi.
          </div>
          <img src="{{ asset('img/cp1.png') }}" alt="Posisi Bumi dalam Tata Surya" class="mt-3 img-fluid" width="500"  >
        </li>
        <li class="list-group-item">
          <div>
            <strong>2. Mengenal Karakteristik Planet:</strong> Siswa belajar tentang planet-planet dalam Tata Surya, termasuk karakteristik fisik, pergerakan (rotasi dan revolusi), dan perbedaan antara planet terestrial dan planet gas raksasa.
          </div>
          <img src="{{ asset('img/cp2.png') }}" alt="Karakteristik Planet" class="mt-3 img-fluid" width="500">
        </li>
        <li class="list-group-item">
          <div>
            <strong>3. Memahami Gerak Bumi dan Pengaruhnya:</strong> Siswa memahami gerak rotasi dan revolusi Bumi serta dampaknya, seperti pergantian siang-malam, musim, dan fenomena gerhana.
          </div>
          <img src="{{ asset('img/cp3.png') }}" alt="Gerak Bumi" class="mt-3 img-fluid" width="500">
        </li>
        <li class="list-group-item">
          <div>
            <strong>4. Mengenal Benda Langit Lainnya:</strong> Siswa dikenalkan dengan benda langit lainnya seperti asteroid, komet, dan planet kerdil, serta karakteristik khasnya yang membedakan mereka dari planet-planet utama.
          </div>
          <img src="{{ asset('img/cp4.png') }}" alt="Benda Langit Lainnya" class="mt-3 img-fluid" width="500">
        </li>
        <li class="list-group-item">
          <div>
            <strong>5. Penyelidikan Fase Bulan:</strong> Siswa belajar mengamati fase Bulan secara langsung, memahami siklusnya, serta pengaruh fase-fase tersebut dalam kehidupan manusia, termasuk perhitungan kalender dan aktivitas pasang surut.
          </div>
          <img src="{{ asset('img/cp5.png') }}" alt="Fase Bulan" class="mt-3 img-fluid" width="500">
        </li>
        <li class="list-group-item">
          <div>
            <strong>6. Refleksi dan Analisis Potensi Tempat Tinggal Alternatif:</strong> Siswa diminta untuk menganalisis potensi beberapa benda langit untuk mendukung kehidupan, menggunakan informasi tentang karakteristik benda langit serta kondisi-kondisi kehidupan di Bumi.
          </div>
          <img src="{{ asset('img/cp6.png') }}" alt="Tempat Tinggal Alternatif" class="mt-3 img-fluid" width="500">
        </li>
        <li class="list-group-item">
          <div>
            <strong>7. Pemanfaatan Pengetahuan dalam Kehidupan Sehari-hari:</strong> Siswa dapat memahami pemanfaatan gerak benda langit dalam kegiatan sehari-hari, seperti kalender, ritual keagamaan, dan industri perikanan.
          </div>
          <img src="{{ asset('img/cp7.png') }}" alt="Pengetahuan dalam Kehidupan Sehari-hari" class="mt-3 img-fluid" width="500">
        </li>
      </ul>
      <p class="mt-4">Melalui capaian ini, siswa tidak hanya mempelajari fakta ilmiah, tetapi juga menerapkan pengetahuan dalam kehidupan sehari-hari dan memperdalam pemahaman akan alam semesta.</p>
    </div>
  </div>
</div>
@endsection
