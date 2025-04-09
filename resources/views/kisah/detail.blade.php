@extends('layouts.app')

@section('content')
<section class="bg-white py-20 text-gray-800">
    <div class="container mx-auto px-6 lg:px-20">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl font-bold mb-6 border-l-4 border-[#3e0d02] pl-4">
                {{ ucwords(str_replace('-', ' ', $slug)) }}
            </h1>
            <img src="{{ asset('images/' . $item['gambar']) }}" alt="{{ $slug }}" class="w-full h-96 object-cover rounded-xl shadow mb-8">
            <article class="prose max-w-none prose-lg text-justify">
                <p>
                    Pada tanggal 30 September 1965, terjadi peristiwa tragis yang dikenal sebagai Gerakan 30 September atau G30S/PKI. Salah satu tokoh penting yang menjadi korban dalam peristiwa ini adalah <strong>{{ ucwords(str_replace('-', ' ', $slug)) }}</strong>.
                </p>
                <p>
                    Cerita lengkap tentang perjuangan, pengabdian, dan kisah heroik beliau akan ditampilkan di sini. Kamu bisa menambahkan detail seperti latar belakang, peran dalam sejarah, hingga pengaruhnya bagi bangsa Indonesia.
                </p>
                <p>
                    <em>“Bangsa yang besar adalah bangsa yang menghargai jasa para pahlawannya.”</em>
                </p>
            </article>
            <div class="mt-10">
                <a href="{{ route('home') }}" class="inline-block bg-[#3e0d02] text-white px-6 py-3 rounded-lg hover:bg-red-900 transition">
                    ← Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
