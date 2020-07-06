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
    public $permiso;

    /**
     * Create a new message instance.
     *
     * @return vopermiso
     */
    public function __construct($permiso)
    {
        $this->permiso = $permiso;
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
