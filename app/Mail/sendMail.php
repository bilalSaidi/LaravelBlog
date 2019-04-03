<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data ;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data ;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('b.saidi@esi-sba.dz')->subject('New Subject')->view('dynamique_email_templete')->with($data,$this->data);
    }
}
