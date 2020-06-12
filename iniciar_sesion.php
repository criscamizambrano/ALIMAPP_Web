<?php
 include 'conexion.php';

 $correo=$_POST["correo"];
 $clave=$_POST["clave"];
 $statement = mysqli_prepare($con,"SELECT Correo FROM `Usuarios_Correo` WHERE Correo = ? AND ? = AES_DECRYPT(Contraseña,?)");
 mysqli_stmt_bind_param($statement,"sss",$correo,$clave,$key);
 if(mysqli_stmt_execute($statement)){
    $response=array();
    $response["success"]=false;
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement,$rescorreo);
    while(mysqli_stmt_fetch($statement)){
        $response["success"]=true;
        $response["correo"]=$rescorreo;
    }
    if(isset($_POST['iniciar']) && $response["success"]){
      session_start();
      $_SESSION['usuario']=true;
      $_SESSION['correo']=$_POST["correo"];
      header("location: control_usuario");
      }
      else if (isset($_POST['iniciar']) && !$response["success"]){
      header("location: iniciar_sesion_web");
      }
 }else{
    $response=array();
    $response["success"]=false;
 }
 echo json_encode($response);

?>
