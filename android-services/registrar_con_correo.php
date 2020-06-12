<?php
 include 'conexion.php';
 $correo=$_POST['correo'];
 $nombre=$_POST['nombre'];
 $clave=$_POST['clave'];
 $statement =mysqli_prepare($con,"INSERT INTO `Usuarios_Correo` (`Correo`, `Nombre`, `Contraseña`) VALUES (?, ?, ?)");
 mysqli_stmt_bind_param($statement,"sss", $correo, $nombre, $clave);
 if(mysqli_stmt_execute($statement)){
    $response=array();
    $response["success"]=true;
 }else{
    $response=array();
    $response["success"]=false;
 }
 
echo json_encode($response);
mysqli_close($con);
?>
