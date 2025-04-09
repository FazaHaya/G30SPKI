@extends('layouts.app')

@section('content')
@vite('resources/css/app.css')

<!-- Navbar -->
<nav class="bg-[#3e0d02] text-white py-4 shadow">
    <div class="container mx-auto px-6 flex justify-between items-center">
      <div class="text-left leading-tight">
        <h1 class="text-xl font-bold">G30S</h1>
        <span class="text-sm font-semibold tracking-wide">Chronicles.<sup>®</sup></span>
      </div>
      <ul class="hidden md:flex space-x-8 text-sm font-light">
        <li><a href="#beranda" class="hover:text-red-300">Home</a></li>
        <li><a href="#info" class="hover:text-red-300">History</a></li>
        <li><a href="#quiz" class="hover:text-red-300">Quiz</a></li>
        <li><a href="#contact" class="hover:text-red-300">Contact</a></li>
      </ul>
      <a href="#askai" class="bg-white text-[#3e0d02] font-semibold text-sm py-2 px-4 rounded-md shadow-md hover:bg-gray-100 transition">
        Ask Ai
      </a>
    </div>
  </nav>

<!-- Hero Section -->
<section class="bg-[#3e0d02] text-white py-20">
    <div class="container mx-auto px-4 flex flex-col lg:flex-row items-center">
      <div class="lg:w-1/2 space-y-6">
        <h1 class="text-6xl lg:text-5xl font-bold leading-tight">
          G30S PKI<br>
          The Event That <br>Shaped Indonesia's <br> History.
        </h1>
        <p class="text-gray-200">
            Spanty is an international estate company that offers <br>
            services like propery appraisal as well as the sale, <br>
            purchase, and investment of real estate.
        </p>
        <button class="bg-white text-[#3e0d02] px-6 py-2 rounded-md font-semibold hover:bg-gray-100 transition">
          Know More
        </button>
      </div>
      <div class="lg:w-1/2 mt-10 lg:mt-0">
        <img src="{{ asset('images/hero-g30s.jpg') }}" alt="Monumen Pahlawan Revolusi" class="rounded-lg shadow-lg" />
      </div>
    </div>
  </section>
  
  <!--info section -->
  <section class="bg-white py-16">
    <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
      <div class="grid grid-cols-2 gap-8">
        <div>
          <p class="text-3xl font-bold text-[#3e0d02]">6</p>
          <p class="mt-2 text-sm text-gray-500">High General Killed</p>
        </div>
        <div>
          <p class="text-3xl font-bold text-[#3e0d02]">30 Sep 1965</p>
          <p class="mt-2 text-sm text-gray-500">Total Net Profit Every Month</p>
        </div>
        <div>
          <p class="text-3xl font-bold text-[#3e0d02]">20 years</p>
          <p class="mt-2 text-sm text-gray-500">covering Indonesia for a long time</p>
        </div>
        <div>
          <p class="text-3xl font-bold text-[#3e0d02]">30K–100K</p>
          <p class="mt-2 text-sm text-gray-500">Victim in this incident</p>
        </div>
      </div>

      <div>
        <h2 class="text-2xl md:text-3xl font-extrabold text-[#3e0d02] leading-tight">
          What happened on <br> that dark night?
        </h2>
        <p class="mt-4 text-sm text-gray-500">
          We provide equity and debt capital globally to back <br> projects that make an impact.
        </p>
        <button class="mt-6 bg-black text-white text-sm font-semibold px-6 py-3 rounded-md shadow hover:bg-gray-800 transition">
          Know More
        </button>
      </div>
    </div>
  </section>


<!-- Video Section -->
<section id="video" class="py-10 bg-white">
    <div class="max-w-4xl mx-auto px-4">
      <div class="relative pt-[56.25%] w-full h-0">
        <iframe class="absolute top-0 left-0 w-full h-full rounded-xl" src="https://www.youtube.com/embed/Gw8lKXJKomo?si=LXiaOHzeTq1k9Bn5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen ></iframe>
      </div>
    </div>
  </section>

<!-- Tokoh Section -->
@php
    $tokoh = [
        ['nama' => 'Pierre Tendean', 'slug' => 'pierre-tendean', 'gambar' => 'pierre1.jpg'],
        ['nama' => 'Ahmad Yani', 'slug' => 'ahmad-yani', 'gambar' => 'ahmad_yani.jpg'],
        ['nama' => 'Di Panjaitan', 'slug' => 'di-panjaitan', 'gambar' => 'di-panjaitan.jpg'],
        ['nama' => 'Mt Haryono', 'slug' => 'mt-haryono', 'gambar' => 'mt-haryono.jpg'],
        ['nama' => 'Jenderal S Parman', 'slug' => 's-parman', 'gambar' => 's-parman.jpg'],
    ];
@endphp

<section id="tokoh" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-4xl font-extrabold text-gray-900 leading-tight">The<br>History</h2>
            <a href="#" class="text-sm font-medium text-gray-800 hover:underline flex items-center gap-1">
                More
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>

        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach ($tokoh as $item)
            <a href="{{ route('kisah.show', $item['slug']) }}">
                <div class="bg-white border rounded-lg overflow-hidden shadow-sm hover:shadow-md transition">
                    <img src="{{ asset('images/' . $item['gambar']) }}" alt="{{ $item['nama'] }}"
                        class="w-full h-60 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800">Kisah {{ $item['nama'] }}</h3>
                        <p class="text-sm text-gray-500 mt-1">20 September 1965</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<!-- Quiz Section -->
<section id="quiz" class="py-20 bg-white">
    <div class="container mx-auto px-4 flex flex-col lg:flex-row items-center justify-between gap-12">
        <div class="lg:w-1/2 text-center lg:text-left">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Quiz Time!</h2>
            <p class="text-gray-500 text-lg mb-6">
                Uji pengetahuanmu tentang peristiwa G30S/PKI, dan lihat seberapa jauh kamu tahu sejarahnya!
            </p>
            <a href="{{ route('quiz') }}"
               class="bg-black text-white font-medium px-6 py-3 rounded-lg hover:bg-gray-800 transition">
                Start
            </a>
        </div>
        <div class="lg:w-1/2">
            <img src="{{ asset('images/kuis.jpg') }}" alt="Quiz G30S/PKI"
                 class="rounded-xl shadow-lg w-full max-w-md mx-auto lg:mx-0">
        </div>
    </div>
</section>

<!-- Artikel Section -->
<section id="artikel" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-[#3e0d02] mb-10">Artikel Sejarah</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($artikels as $artikel)
                <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
                    <img src="{{ asset('images/' . $artikel['gambar']) }}" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800">{{ $artikel['judul'] }}</h3>
                        <p class="mt-2 text-gray-600">{{ $artikel['kutipan'] }}</p>
                        <a href="{{ route('artikel.show', $artikel['slug']) }}" class="mt-4 inline-block text-[#3e0d02] hover:underline">Baca selengkapnya →</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<!-- Quote Section -->
<section id="quote" class="py-16 bg-black text-white">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center md:items-start gap-10">
        <img src="{{ asset('images/soekarno.jpg') }}" alt="Ir. Soekarno" class="w-64 rounded-xl shadow-lg">
        <div class="text-left max-w-xl">
            <svg class="w-10 h-10 mb-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M7.17 6A5.99 5.99 0 0 0 2 12v6h6v-6H5.83A3.99 3.99 0 0 1 9 8.17V6H7.17zm10 0A5.99 5.99 0 0 0 12 12v6h6v-6h-2.17A3.99 3.99 0 0 1 19 8.17V6h-1.83z"/>
            </svg>
            <p class="text-2xl font-semibold leading-relaxed">
                Sejarah adalah cermin bagi bangsa. <br>
                Tidak ada bangsa yang bisa maju tanpa mengenal sejarahnya.
            </p>
            <p class="mt-4 text-gray-400">Ir. Soekarno</p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="bg-[#3e0d02] text-white py-16 px-4">
    <div class="max-w-6xl mx-auto flex flex-col lg:flex-row gap-12">
      <div class="lg:w-1/2 space-y-6">
        <h2 class="text-4xl font-bold leading-tight">We’d love to <br>hear from you</h2>
        <p class="text-gray-300">Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit.</p>
        
        <div class="mt-8">
          <h4 class="text-lg font-semibold mb-2">GET IN TOUCH</h4>
          <p class="text-gray-400">
            2118 Thornridge Cir.<br>
            Syracuse,<br>
            Connecticut 35624
          </p>
          <p class="mt-2 text-gray-400">(208) 555-0112</p>
        </div>

        <div class="flex gap-6 mt-6">
          <a href="#" class="hover:text-red-400">INSTAGRAM</a>
          <a href="#" class="hover:text-red-400">FACEBOOK</a>
          <a href="#" class="hover:text-red-400">TWITTER</a>
        </div>
      </div>
  
      <div class="lg:w-1/2 bg-white text-black rounded-xl p-8 shadow-lg">
        <h2 class="text-2xl font-bold mb-6 text-center">Contact us</h2>
        <form class="space-y-4">
          <div class="flex flex-col md:flex-row gap-4">
            <input type="text" placeholder="First name" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-red-700" />
            <input type="text" placeholder="Last name" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-red-700" />
          </div>
          <div class="flex flex-col md:flex-row gap-4">
            <input type="email" placeholder="Email" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-red-700" />
            <input type="text" placeholder="Phone Number" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-red-700" />
          </div>
          <textarea rows="4" placeholder="Message" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-red-700"></textarea>
          <button type="submit" class="w-full bg-red-800 text-white font-semibold py-2 rounded-lg hover:bg-red-900 transition duration-200">
            Submit
          </button>
        </form>
      </div>
      
    </div>
  </section>

@endsection
