<?php

if($_POST){
    $nombre=$_POST['nombre'];
    $apellido=$_POST['txtApellido'];
    echo "Hola ".$nombre." ".$apellido; //el . es para concatenar/unión
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio5.php" method="post">

        nombre:
        <input type="text" name="nombre" id="">
        <br>

        Apellido
        <input type="text" name="txtApellido" id="">
        <br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>