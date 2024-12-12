@extends('layouts.app')

@section('content')
<div>
    <h1>Evaluasi Pilihan Ganda</h1>
    <div>
        @foreach ($soals as $index => $soal)
            <div>
                <h3>{{ $index + 1 }}. {{ $soal->soal }}</h3>
                <form method="POST" action="{{ route('evaluasi.jawab') }}">
                    @csrf
                    <input type="hidden" name="soal_id" value="{{ $soal->id }}">
                    @foreach (['a', 'b', 'c', 'd'] as $option)
                        <div>
                            <input 
                                type="radio" 
                                name="jawaban" 
                                value="pilihan_{{ $option }}" 
                                {{ $jawaban->where('soal_id', $soal->id)->first()?->jawaban == 'pilihan_' . $option ? 'checked' : '' }}
                            >
                            {{ $soal->{'pilihan_' . $option} }}
                        </div>
                    @endforeach
                    <button type="submit">Jawab</button>
                </form>
            </div>
        @endforeach
    </div>
    <a href="{{ route('evaluasi.selesai') }}">Selesai</a>
</div>
@endsection
