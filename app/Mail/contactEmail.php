<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class contactEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        //
        $this->email = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name = $this->email->name;
        $email = $this->email->email;
        $service = $this->email->service;
        $about = $this->email->about;
        $message = $this->email->message;

        return $this->subject('New Contact Mail Weabers')
                    ->from('contact@weabers.com')
                    ->to('mahir.mahir890@gmail.com')
                    ->view('email-template',[$name, $email,$service, $about, $message]);
    }
}
