<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('static/css/app.css') }}" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <title>Permiso Rechazado</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Sistema de Solicitud de Permisos</a>
        </li>
    </nav>
    <div class="form-group">

        <label>Solicitud de Permiso n° {{$permiso[0]->id}} Rechazado</label>
                
    </div>
</body>
</html>
