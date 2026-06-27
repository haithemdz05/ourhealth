<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MessageToPatient extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $password;

    public function __construct($name,$password)
    {
        $this->name = $name ;
        $this->password = $password ;
    }
    public function content(){
        return new Content(
            view: "emails.message_to_patient",
            with:['name' => $this->name,'password' => $this->password]
        );
    }

    public function build()
    {
        return $this->subject('Directorate of Health ')
                    ->view('emails.message_to_patient');
    }
}

