@extends('layouts.app')

@section('content')
@vite('resources/css/app.css')
<section id="quizApp" class="py-20 bg-white text-gray-800 text-center">
    <div class="container mx-auto px-4">
        <div id="intro" class="animate-fade-in">
            <h2 class="text-3xl font-bold mb-4">Quiz Sejarah G30S/PKI</h2>
            <p class="mb-6 text-lg">Uji pengetahuanmu tentang peristiwa bersejarah ini!</p>
            <button id="startBtn" class="px-6 py-3 bg-[#3e0d02] text-white rounded-lg hover:bg-red-900 transition">
                Mulai Kuis
            </button>
        </div>
        <div id="quiz-container" class="mt-8 hidden animate-fade-in"></div>
        <button id="nextBtn" class="mt-4 px-6 py-3 bg-[#3e0d02] text-white rounded-lg hidden">Pertanyaan Selanjutnya</button>
        <p id="score" class="mt-6 font-semibold text-lg"></p>
    </div>
</section>

<style>
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in {
      animation: fadeIn 0.5s ease-out both;
    }
</style>
    
<script src="{{ asset('js/quiz.js') }}"></script>
@endsection
