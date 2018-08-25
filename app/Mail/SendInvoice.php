<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendInvoice extends Mailable
{
    use Queueable, SerializesModels;
    private $wrequest;

    /**
     * Create a new message instance.
     *
     * @param $wrequest
     */
    public function __construct($wrequest)
    {
        //
        $this->wrequest = $wrequest;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.invoice_email')
            ->subject("SWIMS : Invoice")
            ->attach(public_path('uploads/INVOICE_'.$this->wrequest->id.'.pdf'))
            ->to('ekirima@gmail.com');
    }
}
