<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class iU extends Mailable
{
    use Queueable, SerializesModels;
    public $puerta;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($puerta)
    {
        $this->puerta = $puerta;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail-IU');
    }
}