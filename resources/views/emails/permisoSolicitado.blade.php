<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permiso Solicitado</title>
</head>
<body>
    <p> Recibiste una solicitus de permiso de: {{$msj['apellido']}}, {{$msj['nombre']}} </p>
    <p> Id del permiso {{$id_permiso}} </p>
    <p> Para aceptar o rechazar el permiso, procese la solicitud:
    <a href="http://registro-de-permisos.herokuapp.com/procesarpermiso/{{$id_permiso}}">Ver Solicitud</a>
    Comenario: hay que mandar tambien solo el id
       
    </p>
</body>
</html>

