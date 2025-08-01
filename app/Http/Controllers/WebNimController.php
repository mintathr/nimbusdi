<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class WebNimController extends Controller
{
    public function store(Request $request)
    {
        $messages = [
                'phone_number.required'  => 'Nomor Handphone Harus Diisi!',
                'phone_number.min'       => 'Minimal 10 angka!',
                'phone_number.max'       => 'Maximal 13 angka!',
                'phone_number.numeric'   => 'Format Harus angka!',
            ];
            
        $request->validate([
            'phone_number'            => 'required|string|min:8|max:13',
        ], $messages);

        $contact = Contact::create([
            'name'              => $request->name,
            'email'             => $request->email,
            'industry'          => $request->industry,
            'phone_number'      => $request->phone_number,
            'company_name'      => $request->company_name,
            'message'           => $request->message,
        ]);

        Alert::toast('Your message has been received, we will contact you soon.', 'success')->width('25rem')->padding('5px');
        return redirect()->route('home');
    }
}
