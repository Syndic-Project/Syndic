<?php

namespace App\Mail;

use App\Models\Locateur;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\DB;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class QR extends Mailable
{
    use Queueable, SerializesModels;
    public $text;
    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($text)
    {
        $this->text = $text;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.QR')
            ->with('text',  $this->text);
    }
}
