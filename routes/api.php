<?php

use Illuminate\Http\Request;
use App\Http\Controllers\KomenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeminiController;

Route::get('/getKomen', [KomenController::class, 'getKomen']);
Route::post('/addKomen', [KomenController::class, 'addKomen']);


Route::post('/gemini-chat', function (Request $request) {
    $message = $request->input('message');

   
    $fakeResponse = "Ini adalah balasan dari Gemini untuk: \"$message\"";

    return response()->json([
        'reply' => $fakeResponse
    ]);
});


