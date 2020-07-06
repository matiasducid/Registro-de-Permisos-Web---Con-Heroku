@extends('layout')

@section('title', "Sistema de Permisos")
 
@section('content')

	<div class="flex-center position-ref full-height">
		<div class="content">
		    <!-- Contenido de la sección -->
		    <div class="title m-b-md">
		        Bienvenidos al Sistema de Solicitud de Permisos <div class='nombre_organizacion'></div>
		    </div>

		    <div>       
		        <a href="{{url('solicitarpermiso')}}">
		            <button class="btn btn-secondary">Solicitar Permiso</button>
		        </a>              
		    </div>
		</div>
	</div>
@endsection

