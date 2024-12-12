<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluasi Pilihan Ganda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .answered {
            background-color: #198754; /* Hijau untuk nomor yang sudah dijawab */
            color: white;
        }
        .not-answered {
            background-color: #6c757d; /* Abu-abu untuk nomor yang belum dijawab */
            color: white;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4">Evaluasi Pilihan Ganda</h2>
    
    <!-- Daftar Nomor Soal -->
    <div class="mb-4">
        <h5>Nomor Soal</h5>
        <div class="d-flex flex-wrap gap-2">
            @foreach ($soalIds as $index => $id)
                <button 
                    class="btn @if($answered[$index]) answered @else not-answered @endif" 
                    onclick="navigateToQuestion({{ $index + 1 }})">
                    {{ $index + 1 }}
                </button>
            @endforeach
        </div>
    </div>
    
    <!-- Konten Soal -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Soal {{ $currentQuestion }}</h5>
            <p class="card-text">{{ $currentSoal['pertanyaan'] }}</p>
            <form method="POST" action="{{ route('evaluasi.submitAnswer') }}">
                @csrf
                <input type="hidden" name="question_id" value="{{ $currentSoal['id'] }}">
                @foreach ($currentSoal['options'] as $option)
                    <div class="form-check">
                        <input 
                            class="form-check-input" 
                            type="radio" 
                            name="answer" 
                            id="option_{{ $option['id'] }}" 
                            value="{{ $option['id'] }}"
                            @if($answered[$currentQuestion - 1] == $option['id']) checked @endif>
                        <label class="form-check-label" for="option_{{ $option['id'] }}">
                            {{ $option['text'] }}
                        </label>
                    </div>
                @endforeach
                <button type="submit" class="btn btn-primary mt-3">Simpan Jawaban</button>
            </form>
        </div>
    </div>

    <!-- Navigasi Soal -->
    <div class="d-flex justify-content-between mt-4">
        <button class="btn btn-secondary" onclick="navigateToQuestion({{ $currentQuestion - 1 }})" 
                @if($currentQuestion == 1) disabled @endif>Sebelumnya</button>
        @if($currentQuestion < count($soalIds))
            <button class="btn btn-primary" onclick="navigateToQuestion({{ $currentQuestion + 1 }})">Selanjutnya</button>
        @else
            <form method="POST" action="{{ route('evaluasi.selesai') }}">
                @csrf
                <button class="btn btn-success">Selesai</button>
            </form>
        @endif
    </div>
</div>

<script>
    function navigateToQuestion(questionNumber) {
        window.location.href = `?question=${questionNumber}`;
    }
</script>
</body>
</html>
