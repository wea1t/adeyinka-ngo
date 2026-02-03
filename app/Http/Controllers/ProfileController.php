<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ProfileUpdatedAdminMail;

class ProfileController extends Controller
{
    // Show profile page
    public function show()
    {
        $user = auth()->user();
        return view('profile', compact('user'));
    }

    // Update profile
    public function update(Request $request)
    {
        $user = auth()->user();

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'age' => 'nullable|integer',
            'gender' => 'nullable|string|max:20',
            'bio' => 'nullable|string',
            'interests' => 'nullable|string',
            'organization' => 'nullable|string|max:255',
            'mission' => 'nullable|string',
            'website' => 'nullable|url',
            'ngo_type' => 'nullable|string|max:50',
            'profile_picture' => 'nullable|image|max:2048',
        ]);

        // Handle profile picture upload
        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('profile_pics', 'public');
            $data['profile_picture'] = $path;
        }

        $user->update($data);

        // Send email to admin
        Mail::to('lawalnimatax@gmail.com')->send(new ProfileUpdatedAdminMail($user));

        return redirect()->back()->with('success', 'Profile updated successfully! Admin has been notified.');
    }
}
