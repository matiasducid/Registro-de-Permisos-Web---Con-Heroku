@extends('layout')

@section('title', "Permiso Aceptado")

@section('content')

    <div class="container col-sm-7 tituloForm">
        <h1>Permiso Procesado</h1>
    </div>

    <div class="container col-sm-4 title form-group ocupar flex-center position-ref">

        <label class="confirmacion">Solicitud de Permiso n° {{$permiso[0]->id}} <strong>Aceptada</strong></label>
                
    </div>
@endsection