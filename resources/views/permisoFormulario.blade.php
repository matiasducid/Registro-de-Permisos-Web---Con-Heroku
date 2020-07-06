@extends('layout')

    <div class="container col-sm-7 tituloForm">
        <h1>Permiso Procesado</h1>
    </div>


    <div class="container col-sm-6 border formPermiso"> 
        <br>
        @if($errors->any())
            <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{$error}} </li>
                @endforeach
            </ul>

            </div>
        @endif

        @if(session('mensaje'))
        <div class="alert alert-success">
            <p> {{session('mensaje')}} </p>
        </div>
        @endif

        <form action="{{url('solicitarpermiso')}}" method="post">
        @csrf
            <div class="form-group">

                <label for="dni">DNI:</label>
                <input type="text" class="form-control" name="dni" value="{{old('dni')}}" placeholder="Ingrese su DNI">

                <label for="apellido">Apellido:</label>
                <input type="text" class="form-control" name="apellido" value="{{old('apellido')}}" placeholder="Ingrese su Apellido">

                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}" placeholder="Ingrese su Nombre">

                <label for="email">E-Mail:</label>
                <input type="text" class="form-control" name="email" value="{{old('email')}}" placeholder="Ingrese su email">

                <label for="sector">Sector:</label>
                <input type="text" class="form-control" name="sector" value="{{old('sector')}}" placeholder="¿En que sector trabaja?">
                
                <label for="superior">Superior</label>
                <input type="text" class="form-control" name="superior" value="{{old('superior')}}" placeholder="¿Quien es su superior?">

                <label for="dependencia">Dependencia:</label>
                <input type="text" class="form-control" name="dependencia" value="{{old('dependencia')}}" placeholder="¿En que dependencia trabaja?">

                <label for="espacio">Espacio Especifico:</label>
                <input type="text" class="form-control" name="espacio" value="{{old('espacio')}}"placeholder="¿En que espacio especifico trabaja?">

                <input type="text" class="form-control" name="aprobado" value="False" placeholder="False" style="display:none" >
 

                <br>
                <button type="submit" class="btn btn-secondary">Guardar</button>
            </div>
        </form>   
    </div>    
