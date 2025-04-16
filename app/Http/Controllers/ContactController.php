<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Mail::to('xixiperson15@gmail.com')->send(new ContactMail($request->all()));

        return back()->with('success', 'Pesan kamu berhasil dikirim!');
    }
}
