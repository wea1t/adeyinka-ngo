<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProfileUpdatedAdminMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user; // Holds the user data

    /**
     * Create a new message instance.
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('User Profile Updated')
                    ->view('emails.admin-profile-update');
    }
}
