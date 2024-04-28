<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view("contact.contact");
    }

    public function handleContact(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);
        
        // dd($request);
        Mail::to('yahyajmilou06@gmail.com')->send(new ContactMail($data));
        // dd("salam");

        return back()->with('success', 'Your message has been sent!');
    }
}
