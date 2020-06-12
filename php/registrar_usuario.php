<?php
include 'conectar.php';
    $correo=$_POST['correo'];
    $nombre=$_POST['nombre'];
    $metodo=$_POST['metodo'];
    $uid=$_POST['uid'];

    
    $consulta="insert into Usuarios values('".$correo."','".$nombre."','".$metodo."','".$uid."')";

mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);
?>
