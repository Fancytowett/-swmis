<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendContactForm extends Mailable
{
    use Queueable, SerializesModels;
    private $request;

    /**
     * Create a new message instance.
     *
     * @param $request
     */
    public function __construct($request)
    {
        //
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact')
            ->with(['name'=>$this->request->name])
            ->with('email',$this->request->email)
            ->with('message_b',$this->request->message)
            ->subject("SWIMS : Contacted!");
    }
}
