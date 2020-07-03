<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PermisoRechazadoEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $subjet = 'Solicitud de Permiso Rechazada';
    public $id;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.permisoRechazadoEmail');
    }
}
