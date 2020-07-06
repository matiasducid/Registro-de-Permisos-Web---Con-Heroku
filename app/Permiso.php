<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
        //Mass Assignment
        protected $fillable = ['dni', 'apellido', 'nombre', 'email', 'sector', 'superior', 'dependencia','espacio','estado'];
}
