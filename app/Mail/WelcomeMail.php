<?php

namespace App\Mail;

use App\Models\Locataire;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.welcome');
    }

    // public function verification($id)
    // {
    //     $locataire = Locataire::findOrFail($id);
    //     $locataire->sendEmailVerificationNotification();
    // }
}
