<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageMail;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function view()
    {
        $projects = Project::all();
        return view('home', compact('projects'));
    }

    public function sendMail(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        Mail::to('muhdadangs@gmail.com')->send(new ContactMessageMail($data));

        return back()->with('success', 'Message sent successfully!');
    }
}
