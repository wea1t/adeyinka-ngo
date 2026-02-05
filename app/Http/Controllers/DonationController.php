<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use App\Mail\DonationReceived;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class DonationController extends Controller
{
    /**
     * Show the donation page with recent donations
     */
    public function index()
    {
        $donations = Donation::orderBy('created_at', 'desc')->get(); // latest first
        return view('donation', compact('donations'));
    }

    /**
     * Handle donation form submission
     */
    public function submit(Request $request)
    {
        // Validate input
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'amount' => 'required|numeric|min:1',
            'donation_message' => 'nullable|string|max:500',
        ]);

        try {
            // Store donation
            $donation = Donation::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'amount' => $data['amount'],
                'message' => $data['donation_message'] ?? null,
            ]);

            // Send email to admin
            Mail::to('renewedmuslimfaith@gmail.com')->send(new DonationReceived($donation));

            return redirect()->back()->with('success', 'Thank you for your donation!');

        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Donation Error: '.$e->getMessage());

            return redirect()->back()->with('error', 'Something went wrong. Please try again.');
        }
    }
}
