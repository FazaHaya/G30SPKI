<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KisahController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ChatboxController;



Route::get('/', function () {
    return view('home'); })->name('home');

Route::get('/quiz', function () {
    return view('quiz'); })->name('quiz');
    



Route::post('/contact', function () {
    return back()->with('success', 'Pesan berhasil dikirim!');
});

Route::get('/api/komen-json', function() {
    $komens = App\Models\Komen::all();
    return response()->json($komens);
});

Route::post('/api/komen-json', function(Illuminate\Http\Request $request) {
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'komen' => 'required|string'
    ]);

    $komen = App\Models\Komen::create($validated);
    
    return response()->json($komen, 201);
});


Route::view('/diskusi', 'diskusi');
Route::get('/kisah/{slug}', [KisahController::class, 'show'])->name('kisah.show');
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index');
Route::get('/artikel/{slug}', [ArtikelController::class, 'show'])->name('artikel.show');
Route::get('/', [ArtikelController::class, 'index'])->name('home'); 
Route::get('/chatbox', [ChatboxController::class, 'index'])->name('chatbox');
Route::get('/chatbox', [ChatboxController::class, 'index'])->name('chatbox');
Route::post('/chatbox/ask', [ChatboxController::class, 'ask'])->name('chatbox.ask');