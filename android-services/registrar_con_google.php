<?php
 include 'conexion.php';
 $correo=$_POST['correo'];
 $nombre=$_POST['nombre'];
 $uid=$_POST['uid'];
 $telefono=$_POST['telefono'];
 $statement =mysqli_prepare($con,"INSERT INTO `Usuarios_Google` (`Correo`, `Nombre`, `UID`, `Telefono`) VALUES (?, ?, ?, ?)");
 mysqli_stmt_bind_param($statement,"ssss", $correo, $nombre, $uid,$telefono);
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
