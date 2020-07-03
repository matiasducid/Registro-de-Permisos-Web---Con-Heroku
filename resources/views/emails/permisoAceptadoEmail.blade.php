<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permiso Aceptado</title>
</head>
<body>
    <p> Su permiso fue aceptado </p>
        <p> Id del permiso {{$id_permiso}} </p>
        <p> Para imprimir el permiso, dirigase a la pagina web:
            <a href="http://registro-de-permisos.herokuapp.com/verpermiso/{{$id_permiso}}">
            Ver Permiso
            </a>      
        </p>
</body>
</html>
