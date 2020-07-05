<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('static/css/app.css') }}" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <title>Permiso</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Sistema de Solicitud de Permisos</a>
        </li>
    </nav>

    <div class="container col-sm-7 tituloForm">
        <h1>Solicitud de Permiso</h1>
    </div>

    <div class="container col-sm-8 border formPermiso">

        <form action="" method="get">
            @csrf
                <div class="form-group text-center">

                    <label class="col-sm-4"for="dni">DNI:
                        <input type="text" class="form-control" name="dni" value="{{$permiso[0]->dni}}" disabled>
                    </label>
                    

                    <label class="col-sm-7" for="apellido">Apellido:
                        <input type="text" class="form-control" name="apellido" value="{{$permiso[0]->apellido}}" disabled>
                    </label>
                    

                    <label class="col-sm-6" for="nombre">Nombre:
                        <input type="text" class="form-control" name="nombre" value="{{$permiso[0]->nombre}}" disabled>
                    </label>
                    

                    <label class="col-sm-5" for="email">E-Mail:
                        <input type="text" class="form-control" name="email" value="{{$permiso[0]->email}}" disabled>
                    </label>
                    

                    <label class="col-sm-5" for="sector">Sector:
                        <input type="text" class="form-control" name="sector" value="{{$permiso[0]->sector}}" disabled>
                    </label>
                    
                    
                    <label class="col-sm-6" for="superior">Superior:
                        <input type="text" class="form-control" name="superior" value="{{$permiso[0]->superior}}" disabled>
                    </label>
                    

                    <label class="col-sm-11" for="dependencia">Dependencia:
                        <input type="text" class="form-control" name="dependencia" value="{{$permiso[0]->dependencia}}" disabled>
                    </label>
                    

                    <label class="col-sm-11" for="espacio">Espacio Especifico:
                        <input type="text" class="form-control" name="espacio" value="{{$permiso[0]->espacio}}" disabled>
                    </label>


                    <div class="title m-b-md">
                    {!!QrCode::size(300)->generate({{$permiso[0]->dni}}) !!}
                    </div>


                    <br>
                    <div class="text-center">
                    <a href="http://registro-de-permisos.herokuapp.com/descargarpermiso/{{$permiso[0]->id}}" class="btn btn-secondary">Descargar</a>
                    </div>

                </div>
        </form>   
    </div>

</body>
</html>