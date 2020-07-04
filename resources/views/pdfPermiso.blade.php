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

    <div class="container col-11 tituloForm">
        <h1>Solicitud de Permiso</h1>
    </div>

    <div class="container col-sm-8 border formPermiso">

<form action="" method="get">
    @csrf
        <div class="form-group text-center">
            <div>
            <label class="col-sm-11 text-left"for="dni">Numero de Solicitud:
                <input type="text" class="form-control" name="dni" value="{{$permiso[0]->id}}" disabled>
            </label>
            </div>
            <div>
            <label class="col-sm-11"for="dni">DNI:
                <input type="text" class="form-control" name="dni" value="{{$permiso[0]->dni}}" disabled>
            </label>
            </div>
            <div>
            <label class="col-sm-11" for="apellido">Apellido:
                <input type="text" class="form-control" name="apellido" value="{{$permiso[0]->apellido}}" disabled>
            </label>
            </div>
            <div>
            <label class="col-sm-11" for="nombre">Nombre:
                <input type="text" class="form-control" name="nombre" value="{{$permiso[0]->nombre}}" disabled>
            </label>
            </div>
            <div>
            <label class="col-sm-11" for="email">E-Mail:
                <input type="text" class="form-control" name="email" value="{{$permiso[0]->email}}" disabled>
            </label>
            </div>
            <div>
            <label class="col-sm-11" for="sector">Sector:
                <input type="text" class="form-control" name="sector" value="{{$permiso[0]->sector}}" disabled>
            </label>
            </div>
            <div>
            <label class="col-sm-11" for="superior">Superior:
                <input type="text" class="form-control" name="superior" value="{{$permiso[0]->superior}}" disabled>
            </label>
            </div>
            <div>
            <label class="col-sm-11" for="dependencia">Dependencia:
                <input type="text" class="form-control" name="dependencia" value="{{$permiso[0]->dependencia}}" disabled>
            </label>
            </div>
            <div>
            <label class="col-sm-11" for="espacio">Espacio Especifico:
                <input type="text" class="form-control" name="espacio" value="{{$permiso[0]->espacio}}" disabled>
            </label>
            </div>

        </div>
</form>   
</div>

</body>
</html>