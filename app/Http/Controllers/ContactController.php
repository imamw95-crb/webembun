<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Verify math captcha
        $expected = session()->pull('contact_captcha');
        if ($expected === null || (int) $request->captcha !== $expected) {
            return back()->withErrors(['captcha' => 'Jawaban verifikasi salah. Silakan coba lagi.'])->withInput();
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|max:2000',
        ]);

        Contact::create($validated);

        return back()->with('success', 'Pesan Anda telah terkirim! Kami akan menghubungi Anda segera.');
    }
}
