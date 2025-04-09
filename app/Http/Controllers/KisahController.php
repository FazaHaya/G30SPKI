<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KisahController extends Controller
{
    public function show($slug)
{
    $tokoh = [
        ['nama' => 'Pierre Tendean', 'slug' => 'pierre-tendean', 'gambar' => 'pierre1.jpg'],
        ['nama' => 'Ahmad Yani', 'slug' => 'ahmad-yani', 'gambar' => 'ahmad_yani.jpg'],
        ['nama' => 'Di Panjaitan', 'slug' => 'di-panjaitan', 'gambar' => 'di-panjaitan.jpg'],
        ['nama' => 'Mt Haryono', 'slug' => 'mt-haryono', 'gambar' => 'mt-haryono.jpg'],
        ['nama' => 'Jenderal S Parman', 'slug' => 's-parman', 'gambar' => 's-parman.jpg'],
    ];

    $item = collect($tokoh)->firstWhere('slug', $slug);

    if (!$item) {
        abort(404);
    }

    return view('kisah.detail', compact('slug', 'item'));
}

}
