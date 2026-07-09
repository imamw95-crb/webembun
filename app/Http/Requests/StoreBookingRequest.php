<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'room_id' => 'required|exists:rooms,id',
            'guest_name' => 'required|string|max:255',
            'guest_email' => 'required|email|max:255',
            'guest_phone' => 'nullable|string|max:20',
            'check_in' => 'required|date|after_or_equal:today',
            'check_out' => 'required|date|after:check_in',
            'guests' => 'required|integer|min:1|max:10',
            'notes' => 'nullable|string|max:1000',
            'captcha' => 'required|integer',
        ];
    }

    public function messages(): array
    {
        return [
            'room_id.required' => 'Kamar harus dipilih.',
            'room_id.exists' => 'Kamar tidak ditemukan.',
            'guest_name.required' => 'Nama tamu wajib diisi.',
            'guest_email.required' => 'Email wajib diisi.',
            'guest_email.email' => 'Format email tidak valid.',
            'check_in.required' => 'Tanggal check-in wajib diisi.',
            'check_in.after_or_equal' => 'Check-in tidak boleh sebelum hari ini.',
            'check_out.required' => 'Tanggal check-out wajib diisi.',
            'check_out.after' => 'Check-out harus setelah check-in.',
            'guests.required' => 'Jumlah tamu wajib diisi.',
            'guests.max' => 'Maksimal 10 tamu.',
            'captcha.required' => 'Verifikasi wajib diisi.',
            'captcha.integer' => 'Verifikasi harus berupa angka.',
        ];
    }
}
