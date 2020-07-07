<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PermisoSolicitado extends Mailable
{
    use Queueable, SerializesModels;

    public $subjet = 'Solicitud Permiso';
    public $msj;
    public $id_permiso;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($msj, $id_permiso)
    //recibe el id de un permiso y se va a recibir en el mail
    {
        $this->msj = $msj;
        $this->id_permiso = $id_permiso;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.permisoSolicitado')->subject('Solicitud de Permiso');
    }
}
