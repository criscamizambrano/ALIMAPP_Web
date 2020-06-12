<?php

$hostname='ns1.cp-18.webhostbox.net';
$database='alima1dj_ALIMAPP';
$username='alima1dj_app';
$password='AhSwXt0BpxzA';

$conexion = mysqli_connect( $hostname, $username, $password )or die ("No es posible conectarse al servidor de Base de datos");

 

$db = mysqli_select_db( $conexion, $database ) or die ( "Upps! Parece ser que no es posible conectarse a la base de datos" );


if ($conexion->connect_errno) {
 echo "lo sentimos, tenemos problemas con la conexión";
}
?>
