<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendUserPassword extends Mailable
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
        return $this->subject("SWMIS: Account Password")
            ->view('emails.password')
            ->with(['name'=>$this->request->name,'password'=>$this->request->password])
            ->to("ekirima@gmail.com");
    }
}
