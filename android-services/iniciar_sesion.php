<?php
 $con=mysqli_connect("ns1.cp-18.webhostbox.net", "alima1dj_app", "AhSwXt0BpxzA", "alima1dj_ALIMAPP");

 $correo=$_POST["correo"];
 $clave=$_POST["clave"];

 $statement = mysqli_prepare($con,"SELECT Correo FROM Usuarios WHERE Correo = ? AND Contraseña = ?");
 mysqli_stmt_bind_param($statement,"ss",$correo,$clave);
 mysqli_stmt_execute($statement);

 mysqli_stmt_store_result($statement);
 mysqli_stmt_bind_result($statement,$email);
 
 $response=array();
 $response["success"]=false;

 while(mysqli_stmt_fetch($statement)){
     $response["success"]=true;
     $response["correo"]=$email;
 }

 echo json_encode($response);

?>
