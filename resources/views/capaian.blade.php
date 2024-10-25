@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="form-image-container">
    
    <!-- Menu (Icon Capaian Pembelajaran) -->
    <div class="menu text-center">
      <div class="menu-item">
        <img src="{{ asset('images/capaian-icon.png') }}" alt="Icon Capaian Pembelajaran" width="100" class="img-fluid mb-3">
        <p class="fw-bold fs-5">Capaian Pembelajaran</p>
      </div>
    </div>

    <!-- Konten Utama (Deskripsi Capaian Pembelajaran) -->
    <div class="form-container">
      <h2 class="text-center mb-4">Capaian Pembelajaran</h2>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          <strong>1. Memahami Posisi Bumi dalam Tata Surya:</strong> Siswa diharapkan memahami Bumi sebagai bagian dari Tata Surya yang terdiri dari Matahari, planet-planet, satelit, asteroid, komet, dan benda langit lainnya yang saling memengaruhi.
        </li>
        <li class="list-group-item">
          <strong>2. Mengenal Karakteristik Planet:</strong> Siswa belajar tentang planet-planet dalam Tata Surya, termasuk karakteristik fisik, pergerakan (rotasi dan revolusi), dan perbedaan antara planet terestrial dan planet gas raksasa.
        </li>
        <li class="list-group-item">
          <strong>3. Memahami Gerak Bumi dan Pengaruhnya:</strong> Siswa memahami gerak rotasi dan revolusi Bumi serta dampaknya, seperti pergantian siang-malam, musim, dan fenomena gerhana.
        </li>
        <li class="list-group-item">
          <strong>4. Mengenal Benda Langit Lainnya:</strong> Siswa dikenalkan dengan benda langit lainnya seperti asteroid, komet, dan planet kerdil, serta karakteristik khasnya yang membedakan mereka dari planet-planet utama.
        </li>
        <li class="list-group-item">
          <strong>5. Penyelidikan Fase Bulan:</strong> Siswa belajar mengamati fase Bulan secara langsung, memahami siklusnya, serta pengaruh fase-fase tersebut dalam kehidupan manusia, termasuk perhitungan kalender dan aktivitas pasang surut.
        </li>
        <li class="list-group-item">
          <strong>6. Refleksi dan Analisis Potensi Tempat Tinggal Alternatif:</strong> Siswa diminta untuk menganalisis potensi beberapa benda langit untuk mendukung kehidupan, menggunakan informasi tentang karakteristik benda langit serta kondisi-kondisi kehidupan di Bumi.
        </li>
        <li class="list-group-item">
          <strong>7. Pemanfaatan Pengetahuan dalam Kehidupan Sehari-hari:</strong> Siswa dapat memahami pemanfaatan gerak benda langit dalam kegiatan sehari-hari, seperti kalender, ritual keagamaan, dan industri perikanan.
        </li>
      </ul>
      <p class="mt-4">Melalui capaian ini, siswa tidak hanya mempelajari fakta ilmiah, tetapi juga menerapkan pengetahuan dalam kehidupan sehari-hari dan memperdalam pemahaman akan alam semesta.</p>
    </div>
  </div>
</div>
@endsection
