@extends('layouts.app')

@section('content')
<section class="py-20 bg-white text-gray-800">
    <div class="container mx-auto px-6 lg:px-20">
        <div class="max-w-3xl mx-auto">
            <h1 class="text-3xl font-bold mb-4">{{ ucwords(str_replace('-', ' ', $slug)) }}</h1>
            <div class="isi-artikel space-y-5">
                <p class="text-lg leading-relaxed">
                    Gerakan 30 September atau yang dikenal sebagai G30S merupakan peristiwa penting dalam sejarah Indonesia yang terjadi pada malam 30 September hingga 1 Oktober 1965. Peristiwa ini ditandai dengan penculikan dan pembunuhan enam jenderal TNI Angkatan Darat oleh sekelompok pasukan yang menamakan diri sebagai Gerakan 30 September. Gerakan ini mengklaim ingin menyelamatkan Presiden Soekarno dari ancaman Dewan Jenderal yang disebut-sebut akan melakukan kudeta terhadap pemerintahan yang sah.
                </p>
                <p class="text-lg leading-relaxed">
                    Situasi politik Indonesia pada saat itu sedang tidak stabil. Ketegangan antara kelompok militer, Partai Komunis Indonesia (PKI), dan kelompok nasionalis serta agama semakin memuncak. PKI yang saat itu merupakan salah satu partai terbesar di Indonesia memiliki pengaruh kuat dalam berbagai sektor, termasuk organisasi massa dan sebagian kalangan pemerintahan. Hal ini menimbulkan kekhawatiran di kalangan militer, khususnya Angkatan Darat, yang melihat PKI sebagai ancaman terhadap ideologi Pancasila.
                </p>
                <p class="text-lg leading-relaxed">
                    Ketegangan juga diperparah dengan kondisi ekonomi yang memburuk. Inflasi tinggi, kelangkaan bahan pokok, serta ketidakpuasan masyarakat terhadap kinerja pemerintah menyebabkan keresahan di berbagai lapisan masyarakat. Situasi ini menjadi lahan subur bagi berkembangnya konflik antar kelompok yang berbeda kepentingan. Dalam konteks inilah G30S muncul sebagai puncak dari konflik laten antara kekuatan-kekuatan politik yang saling mencurigai dan bersaing.
                </p>
                <p class="text-lg leading-relaxed">
                  Setelah penculikan dan pembunuhan enam jenderal, kelompok G30S mengumumkan bahwa mereka telah mengambil alih kekuasaan demi menyelamatkan negara dari kudeta Dewan Jenderal. Namun, dalam waktu singkat, Mayor Jenderal Soeharto yang saat itu menjabat sebagai Panglima Kostrad segera mengambil alih kendali dan memukul balik gerakan tersebut. Dalam waktu kurang dari 48 jam, gerakan ini berhasil dipadamkan dan para pelakunya diburu serta ditangkap.
                </p>
                <p class="text-lg leading-relaxed">
                    Peristiwa ini kemudian dijadikan dasar oleh Angkatan Darat untuk melakukan pembersihan terhadap PKI yang dituduh sebagai dalang di balik G30S. Gelombang penangkapan, pengusiran, dan pembunuhan terhadap anggota maupun simpatisan PKI terjadi secara masif di berbagai daerah di Indonesia. Diperkirakan ratusan ribu orang menjadi korban dalam tragedi kemanusiaan yang menyusul setelah peristiwa G30S.
                <p>
                    <p class="text-lg leading-relaxed">
                        G30S bukan hanya menjadi titik balik dalam sejarah politik Indonesia, tetapi juga meninggalkan luka mendalam dalam kehidupan sosial bangsa. Rezim Orde Baru yang dipimpin oleh Soeharto memanfaatkan peristiwa ini untuk memperkuat kekuasaannya selama lebih dari tiga dekade. Hingga kini, narasi dan interpretasi terhadap G30S masih menjadi perdebatan di kalangan sejarawan dan masyarakat, terutama terkait siapa yang sebenarnya bertanggung jawab atas gerakan ini dan bagaimana kebenaran sejarah seharusnya dipahami.
                    <p>
            </div>
        
            <div class="mt-8">
                <a href="{{ url('/') }}#artikel" class="text-[#3e0d02] hover:underline">← Kembali ke daftar artikel</a>
            </div>
        </div>
    </div>
</section>
@endsection
