<?php 
$nombre = $_POST["Nombre"];
$apellidos = $_POST["Apellidos"];
$correo_electronico = $_POST["Correo_Electronico"];
$telefono = $_POST["Telefono"];
$usuario = $_POST["Usuario"];
$contrasena = $_POST["Contrasena"];

$insertar = "INSERT INTO usuario(Nombre, Apellidos, Correo_Electronico, Telefono, Usuario, Contrasena) 
values('$nombre', '$apellidos','$correo_electronico','$telefono', '$usuario', '$contrasena')";

$resultado = mysqli_query($conexion, $insertar);
if($resultado){
    echo "Se registró el usuario";
} else {
    echo "No se logró registrar";
}
?>