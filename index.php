<?php
    include("cn.php");
    $Personas = "Select * from Persona";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>
    <div class="container-add">
        <h2 class="container__title">Registrar Usuario</h2>
        <form action="registrar.php" method="post" class="container__form">
        <label for="" class="container__label">Nombre :</label>
        <input name="Nombre" type="text" class="container__input">
        <label for="" class="container__label">Apellidos :</label>
        <input name="Telefono" type="text" class="container__input">
        <label for="" class="container__label">Correo Electronico :</label>
        <input name="Telefono" type="text" class="container__input">
        <label for="" class="container__label">Telefono :</label>
        <input name="Telefono" type="text" class="container__input">
        <label for="" class="container__label">Usuario :</label>
        <input name="Telefono" type="text" class="container__input">
        <label for="" class="container__label">Contraseña :</label>
        <input name="Correo" type="text" class="container__input">
        <input class="container__submit" type="submit" value="Registrar">
        </form>
    </div>
    
</body>
</html>