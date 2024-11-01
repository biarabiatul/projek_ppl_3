@extends('layouts.materi')

@section('container')
<div class="container">
    <h2>Terima kasih!</h2>
    <p>Jawaban Anda telah berhasil dikirim.</p>
    <a href="{{ route('evaluasi') }}" class="btn btn-primary">Kembali ke Evaluasi</a>
</div>
@endsection
