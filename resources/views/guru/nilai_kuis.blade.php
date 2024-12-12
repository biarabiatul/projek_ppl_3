@extends('layouts.materi')

@section('container')
<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <div class="navbar-collapse collapse">
        <div class="navbar-title">REKAP NILAI KUIS MERKURIUS</div>
        <ul class="navbar-nav navbar-align">
            <!-- Your existing nav items here -->
        </ul>
    </div>
</nav>

<div class="container mt-4">
    <!-- Bagian Rekap Nilai Kuis -->
    <div class="text-center mb-4">
        <h3>Rekap Nilai Kuis</h3>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Kuis 1</th>
                    <th>Kuis 2</th>
                    <th>Kuis 3</th>
                    <th>Rata-rata</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rekapNilai as $index => $nilai)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $nilai['nama'] }}</td>
                    <td>{{ $nilai['kuis1'] }}</td>
                    <td>{{ $nilai['kuis2'] }}</td>
                    <td>{{ $nilai['kuis3'] }}</td>
                    <td>{{ number_format(($nilai['kuis1'] + $nilai['kuis2'] + $nilai['kuis3']) / 3, 2) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Tombol navigasi untuk kembali atau ke materi berikutnya -->
    <div class="d-flex justify-content-between align-items-center mt-4">
        <a href="jupiter" class="btn btn-secondary btn-lg">Kembali ke Materi</a>
        <a href="saturnus" class="btn btn-primary btn-lg">Lanjut ke Saturnus</a>
    </div>
</div>
@endsection