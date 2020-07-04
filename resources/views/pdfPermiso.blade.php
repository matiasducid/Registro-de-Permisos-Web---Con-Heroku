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
        
            <label class="col-sm-12"for="dni">Numero de Solicitud: 
                <p>{{$permiso[0]->id}}</p>
            </label>

            <label class="col-sm-6"for="dni">DNI:
                <p>{{$permiso[0]->dni}}</p>
            </label>
            

            <label class="col-sm-6" for="apellido">Apellido:
                <p>{{$permiso[0]->apellido}}</p>
            </label>
            

            <label class="col-sm-6" for="nombre">Nombre:
                <p>{{$permiso[0]->nombre}}</p>
            </label>
            

            <label class="col-sm-6" for="email">E-Mail:
                <p>{{$permiso[0]->email}}</p>
            </label>
            

            <label class="col-sm-6" for="sector">Sector:
                <p>{{$permiso[0]->sector}}</p>
            </label>
            
            
            <label class="col-sm-6" for="superior">Superior:
                <p>{{$permiso[0]->superior}}</p>
            </label>
            

            <label class="col-sm-6" for="dependencia">Dependencia:
                <p>{{$permiso[0]->dependencia}}</p>
            </label>
            

            <label class="col-sm-6" for="espacio">Espacio Especifico: <p>{{$permiso[0]->espacio}}</p> </label>

        </div> 
    </div>

</body>
</html>