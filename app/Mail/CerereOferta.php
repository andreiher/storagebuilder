<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CerereOferta extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->to("vlad.moise97@yahoo.com")
            ->from("no-reply@onedev.ro")
            ->subject("Cerere de oferta cladire")
            ->view('emails.cerere_oferta',['data' => $this->data]);
    }
}
