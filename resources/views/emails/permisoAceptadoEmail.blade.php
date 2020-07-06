<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permiso Aceptado</title>
</head>
<body>
    <p> Buenas {{$permiso[0]->apellido}}, {{$permiso[0]->nombre}}. Su solicitud de permiso fue aceptada </p>
    <p> Para imprimir el permiso, dirigase a la pagina web:
        <a href="http://registro-de-permisos.herokuapp.com/verpermiso/{{$id}}">
        Ver Permiso
        </a>      
    </p>
</body>
</html>
