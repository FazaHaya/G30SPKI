<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = [
            [
                'judul' => 'Latar Belakang G30S/PKI',
                'slug' => 'latar-belakang-g30s',
                'gambar' => 'artikel1.jpg',
                'kutipan' => 'Mengupas sebab-sebab utama terjadinya peristiwa G30S/PKI.'
            ],
            [
                'judul' => 'Peran Militer dalam G30S',
                'slug' => 'peran-militer-g30s',
                'gambar' => 'artikel2.jpg',
                'kutipan' => 'Analisis bagaimana keterlibatan militer membentuk arah sejarah.'
            ],
            [
                'judul' => 'Dampak Sosial Politik Pascaperistiwa',
                'slug' => 'dampak-g30s',
                'gambar' => 'artikel3.jpg',
                'kutipan' => 'Menelusuri pengaruh peristiwa ini terhadap masyarakat Indonesia.'
            ]
        ];

        return view('home', compact('artikels'));
    }

    public function show($slug)
    {
        return view('artikel.show', ['slug' => $slug]);
    }
}
