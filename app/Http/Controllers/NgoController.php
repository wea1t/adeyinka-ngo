<?php

namespace App\Http\Controllers;

use App\Mail\VerifyNgoEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NgoController extends Controller
{
    // Show the NGO form
    public function showForm()
    {
        return view('ngo.form');
    }

    // Handle form submission
    public function submitForm(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:30',
            'location' => 'nullable|string|max:255',
            'mission' => 'nullable|string|max:500',
        ]);

        // Send email to admin
        Mail::to('renewedmuslimfaith@gmail.com')
            ->send(new VerifyNgoEmail($data));

        return redirect()->back()->with('success', 'Your NGO submission has been received. We will contact you soon.');
    }
}
