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
        return $this->view('emails.permisoRechazadoEmail')->subject('Solicitud de Permiso Rechazada');
    }
}
