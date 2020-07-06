@extends('layout')

@section('title', "Sistema de Permisos")
 
@section('content')

	<div class="flex-center position-ref full-height">
		<div class="content">
		    <!-- Contenido de la sección -->
		    <div class="title m-b-md">
		        <p class='nombre_organizacion_body'></p>
		    </div>

		    <div>       
		        <a href="{{url('solicitarpermiso')}}">
		            <button class="btn btn-secondary">Solicitar Permiso</button>
		        </a>              
		    </div>
		</div>
	</div>
@endsection

