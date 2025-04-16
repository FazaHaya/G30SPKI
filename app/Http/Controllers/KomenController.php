<?php

namespace App\Http\Controllers;

use App\Models\Komen;
use Illuminate\Http\Request;

class KomenController extends Controller
{
    public function getKomen()
    {
        return response()->json(Komen::all());
    }

    public function addKomen(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'komen' => 'required|string',
        ]);

        $komen = Komen::create($validated);
        return response()->json($komen, 201);
    }
}
