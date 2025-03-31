<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('pages.contact');
    }

    public function send(Request $request)
    {
        // Logic to handle contact form submission
        return redirect()->route('contact')->with('message', 'Your message has been sent!');
    }
}
