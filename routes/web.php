<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KisahController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home'); })->name('home');

Route::get('/quiz', function () {
    return view('quiz'); })->name('quiz');


Route::post('/contact', function () {
    return back()->with('success', 'Pesan berhasil dikirim!');
});

Route::get('/kisah/{slug}', [KisahController::class, 'show'])->name('kisah.show');

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index');
Route::get('/artikel/{slug}', [ArtikelController::class, 'show'])->name('artikel.show');
Route::get('/', [ArtikelController::class, 'index'])->name('home');