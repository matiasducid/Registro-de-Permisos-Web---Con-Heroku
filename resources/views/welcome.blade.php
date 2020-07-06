@extends('layout')

@section('title', "Sistema de Permisos")

   
@section('content')
<div class="content">
    <!-- Contenido de la sección -->
    <div class="title m-b-md">
        Bienvenidos al Sistema de Solicitud de Permisos
    </div>

    <div>       
        <a href="{{url('solicitarpermiso')}}">
            <button class="btn btn-secondary">Solicitar Permiso</button>
        </a>              
    </div>
</div>
@endsection

