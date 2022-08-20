<?php
session_start();
$usuario = isset($_POST['usuario'])?$_POST['usuario']:"";
$pw = isset($_POST['contraseña'])?$_POST['contraseña']:"";

include_once('conexion.php');
$consulta=("SELECT usuario,pass FROM usuario WHERE usuario ='".$usuario."' AND pass='".$pw."'");
$result = mysqli_query($con,$consulta);
if(mysqli_num_rows($result)!=1){
    echo('<h2>Usuario no encontrado</h2>');
}else{
    echo('<h2>Usuario encontrado</h2>');
}

?>