<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VolunteerController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'area' => 'required|string|max:255',
            'message' => 'nullable|string',
        ]);

        // Rename message to avoid conflict
        $data = $validated;
        $data['user_message'] = $validated['message'] ?? 'N/A';
        unset($data['message']); // remove the conflicting key

        Mail::send('emails.volunteer', $data, function($message) use ($data) {
            $message->to('renewedmuslimfaith@gmail.com')
                    ->subject('New Volunteer Sign-Up');
        });

        return redirect()->back()->with('success', 'Thank you for signing up to volunteer!');
    }
}
