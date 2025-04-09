@extends('layouts.app')

@section('content')
<section class="py-20 bg-white text-gray-800">
    <div class="container mx-auto px-6 lg:px-20">
        <div class="max-w-3xl mx-auto">
            <h1 class="text-3xl font-bold mb-4">{{ ucwords(str_replace('-', ' ', $slug)) }}</h1>
            <p class="text-lg leading-relaxed">
                Ini adalah halaman detail artikel <strong>{{ $slug }}</strong>. Konten lengkap akan ditambahkan di sini nanti.
            </p>
            <div class="mt-8">
                <a href="{{ url('/') }}#artikel" class="text-[#3e0d02] hover:underline">← Kembali ke daftar artikel</a>
            </div>
        </div>
    </div>
</section>
@endsection
