<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ngo;
use Illuminate\Support\Str;
use App\Mail\VerifyNgoEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class NgoController extends Controller
{
    // Show all NGOs (admin)
    public function index()
    {
        $ngos = Ngo::latest()->get();
        return view('admin.ngo.index', compact('ngos'));
    }

    // Show create NGO form
    public function create()
    {
        return view('admin.ngo.create');
    }

    // Store NGO
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'nullable|email',
            'phone'       => 'nullable|string|max:30',
            'location'    => 'nullable|string|max:255',
            'mission'     => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        // Add verification token
        $data['verification_token'] = Str::uuid();

        // Create NGO ONCE
        $ngo = Ngo::create($data);

        // Send verification email only if email exists
        if ($ngo->email) {
            Mail::to($ngo->email)->send(new VerifyNgoEmail($ngo));
        }

        return redirect()
            ->route('admin.ngos.index')
            ->with('success', 'NGO created successfully and verification email sent.');
    }
}
