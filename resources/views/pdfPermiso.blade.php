<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('static/css/app.css') }}" rel="stylesheet" type="text/css"/>

    <title>Permiso</title>
</head>
<body>

    <div class="container col-sm-11 tituloForm">
        <h1>Solicitud de Permiso</h1>
    </div>

    <div class="container col-sm-8 border formPermiso">

        <div class="form-group text-center">

            <div class="col-sm-8"> 
                <label for="dni">Numero de Solicitud: 
                    <p>{{$permiso[0]->id}}</p>
                </label>
            </div>
        
 
            <div class="col-sm-4">
            <label for="dni">DNI:
                <p>{{$permiso[0]->dni}}</p>
            </label>
            </div>

            <div class="col-sm-4" >
            <label for="apellido">Apellido:
                <p>{{$permiso[0]->apellido}}</p>
            </label>
            </div>

            <div class="col-sm-4">
            <label  for="nombre">Nombre:
                <p>{{$permiso[0]->nombre}}</p>
            </label>
            </div>

            <div class="col-sm-4">
            <label  for="email">E-Mail:
                <p>{{$permiso[0]->email}}</p>
            </label>
            </div>

            <div class="col-sm-4">
            <label  for="sector">Sector:
                <p>{{$permiso[0]->sector}}</p>
            </label>
            </div>

            <div class="col-sm-4">           
            <label  for="superior">Superior:
                <p>{{$permiso[0]->superior}}</p>
            </label>
            </div>

            <div class="col-sm-4">
            <label  for="dependencia">Dependencia:
                <p>{{$permiso[0]->dependencia}}</p>
            </label>
            </div>

            <div class="col-sm-4">
            <label  for="espacio">Espacio Especifico: 
            <p>{{$permiso[0]->espacio}}</p> 
            </label>
            </div>

        </div> 
    </div>

</body>
</html>