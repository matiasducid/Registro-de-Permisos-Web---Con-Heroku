<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PermisoAceptadoEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $subjet = 'Solicitud de Permiso Aprobada';
    public $id_permiso;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($id_permiso)
    {
        $this->id_permiso = $id_permiso;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.permisoAceptadoEmail');
    }
}
