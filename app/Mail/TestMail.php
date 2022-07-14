<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;
    public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details=$details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Consulta acerca del almacen de Constructora RF')->view('emails.TestEmail');
        return $this->view('view.name');
    }
}


















// MAIL_MAILER=smtp
// MAIL_HOST=smtp.mailtrap.io
// MAIL_PORT=25
// MAIL_USERNAME=da06e666977e4a
// MAIL_PASSWORD=b22679521c6579
// MAIL_ENCRYPTION=
// MAIL_FROM_ADDRESS=almacen@constructorarf.com
// MAIL_FROM_NAME="Constructora RF"