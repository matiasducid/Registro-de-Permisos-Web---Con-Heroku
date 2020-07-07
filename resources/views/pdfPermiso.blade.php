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
        <h1 class="container col-9">Sistema de Solicitud de Permisos</h1>
        <!--<img src="{{ asset('images/escudo-chubut.png')}}" ALIGN="right" class="logo_superior_derecho pull-right align-right">-->
        <img src="{{ asset('images/albatroz-unpsjb.png')}}" ALIGN="right" class="logo_superior_derecho pull-right align-right col-2">
    </div>

    <div class="container col-8 tituloForm">
        <h3>Permiso</h3>
    </div>

    <div class="container col-sm-8 border formPermiso">

<form action="" method="get">
    @csrf
        <div class="form-group text-center">
            <div>
            <label class="col-sm-11 text-left"for="dni">Numero de Solicitud:
                <input type="text" class="form-control text-center" name="dni" value="{{$permiso[0]->id}}" disabled>
            </label>
            </div>
            <div>
            <label class="col-sm-11 text-left"for="dni">DNI:
                <input type="text" class="form-control text-center" name="dni" value="{{$permiso[0]->dni}}" disabled>
            </label>
            </div>
            <div>
            <label class="col-sm-11 text-left" for="apellido">Apellido:
                <input type="text" class="form-control text-center" name="apellido" value="{{$permiso[0]->apellido}}" disabled>
            </label>
            </div>
            <div>
            <label class="col-sm-11 text-left" for="nombre">Nombre:
                <input type="text" class="form-control text-center" name="nombre" value="{{$permiso[0]->nombre}}" disabled>
            </label>
            </div>
            <div>
            <label class="col-sm-11 text-left" for="email">E-Mail:
                <input type="text" class="form-control text-center" name="email" value="{{$permiso[0]->email}}" disabled>
            </label>
            </div>
            <div>
            <label class="col-sm-11 text-left" for="sector">Sector:
                <input type="text" class="form-control text-center" name="sector" value="{{$permiso[0]->sector}}" disabled>
            </label>
            </div>
            <div>
            <label class="col-sm-11 text-left" for="superior">Superior:
                <input type="text" class="form-control text-center" name="superior" value="{{$permiso[0]->superior}}" disabled>
            </label>
            </div>
            <div>
            <label class="col-sm-11 text-left" for="dependencia">Dependencia:
                <input type="text" class="form-control text-center" name="dependencia" value="{{$permiso[0]->dependencia}}" disabled>
            </label>
            </div>
            <div>
            <label class="col-sm-11 text-left" for="espacio">Espacio Especifico:
                <input type="text" class="form-control text-center" name="espacio" value="{{$permiso[0]->espacio}}" disabled>
            </label>
            </div>
            
            <img src="data:image/png;base64, <?php echo base64_encode($qr) ?> ">
            
        </div>
</form>   
</div>

</body>
</html>