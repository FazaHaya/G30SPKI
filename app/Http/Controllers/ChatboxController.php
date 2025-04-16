<?php

// app/Http/Controllers/ChatboxController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatboxController extends Controller
{
    public function index()
    {
        return view('chatbox');
    }

    public function ask(Request $request)
    {
        $prompt = $request->input('prompt');
    
      
        $apiKey = 'AIzaSyCsT5ioM1-Wx5JxXBUSW0ZfrSXCKOShIuM';
    
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post("https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=$apiKey", [
            'contents' => [
                ['parts' => [['text' => $prompt]]]
            ]
        ]);
    
        $answer = $response->json()['candidates'][0]['content']['parts'][0]['text'] ?? 'No response from AI.';
        
        return response()->json(['answer' => $answer]);
    }
}
