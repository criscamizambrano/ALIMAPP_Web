<?php
 include 'conexion.php';
 $correo=$_POST['correo'];
 $nombre=$_POST['nombre'];
 $clave=$_POST['clave'];
 $statement =mysqli_prepare($con,"INSERT INTO `Usuarios_Correo` (`Correo`, `Nombre`, `Contraseña`) VALUES (?, ?, AES_ENCRYPT(?,?))");
 mysqli_stmt_bind_param($statement,"ssss", $correo, $nombre, $clave, $key);
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
