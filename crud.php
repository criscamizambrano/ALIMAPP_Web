<?php 
    include 'conexion.php';
    session_start();
?>
<!doctype html>
<html lang="es">
  <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/fonts.css">

    <title>CRUD Alimentos</title>
  </head>
  <body>
  <header>
        <div class="logo">
            <img style="width:100px; height:100px;" src="img/logo_png.png">
           </div>
        <div class="menu_bar">
            <a href="#" class="bt-menu"><span class="icon-menu"></span>Menú</a>
        </div>
        <nav>
            <ul>
                <li><a id="btn_inicio" href="index"><span class="icon-home3"></span>Inicio</a></li>
                <li><a href="#"><span class="icon-spinner4"></span>Alimentos</a></li>
                <li><a href="#"><span class="icon-file-text"></span>Recetas</a></li>
                <li><a href="descargar_app"><span class="icon-android"></span>Descarga nuestra APP</a></li>
                <li><a href="#"><span class="icon-mail2"></span>Contacto</a></li>
                <li><a id="btn_iniciar_sesion" href="iniciar_sesion_web"><span class="icon-user"></span>Iniciar Sesion</a></li>
            </ul>
        </nav>
    </header>
    <section>
    
        <form action="agregarAlimento.php" method="POST">
        <div class="form-row justify-content-center"> 
            <div class="col-auto">
            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre del alimento" >
            </div>       
            <div class="col-auto">
            <input type="text" name="tipoAlimento" class="form-control" id="tipoAlimento" placeholder="Tipo de alimento" >
            </div>   
            <div class="col-auto">
            <input type="text" name="nutriente" class="form-control" id="nutriente" placeholder="Nutriente" >
            </div>   
            <div class="col-auto">
            <input type="text" name="tipoNutriente" class="form-control" id="tipoNutriente" placeholder="Tipo de nutriente" >
            </div>    
            <div class="col-auto">
            <input type="text" name="url" class="form-control" id="url" placeholder="URL imagen" >
            </div>   
            <div class="col-auto">
            <button type="submit" name="guardar" class="btn btn-info">Añadir nuevo alimento</button>
            </div>    

        </div>
        </form>
    
    <?php 
    if(isset($_SESSION['success'])){
      if($_SESSION["success"]==true){
         echo'<div class="alert alert-success">Registro exitoso</div>';
         unset($_SESSION['success']);
      }
    }elseif(isset($_SESSION['msg'])){
      echo'<div class="alert alert-danger">'+$_SESSION['msg']+'</div>';
      unset($_SESSION['msg']);
    }
    
    ?>
  <div class="table-responsive">
  <table class="table table-hover table-dark table-sm">
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Tipo de alimento</th>
        <th>Nutriente</th>
        <th>Tipo de nutriente</th>
        <th>Imagen</th>
        <th>Acción</th>
        <th></th>
      </tr>
      <form action="action.php" method="POST">
      <?php
    $sql="SELECT id,nombre,tipoAlimento,nutriente,tipoNutriente,imagen_url FROM alimento";
    $result=mysqli_query($con,$sql);
    while($mostrar=mysqli_fetch_array($result)){
    ?>


    <tr>
        <td ><?php echo $mostrar['id'] ?></td>
        <td><?php echo $mostrar['nombre'] ?></td>
        <td><?php echo $mostrar['tipoAlimento'] ?></td>
        <td><?php echo $mostrar['nutriente'] ?></td>
        <td><?php echo $mostrar['tipoNutriente'] ?></td>
        <td><img style="width:65px; height:65px;" src="<?php echo $mostrar['imagen_url']?>"></td>
        <td><button type="submit" name="Editar" class="btn btn-primary" value="<?php echo $mostrar['id'] ?>">Editar alimento</button></td>
        <td><button type="submit" name="Eliminar" class="btn btn-warning" value="<?php echo $mostrar['id'] ?>">Eliminar alimento</button></td>
    </tr>
    <?php
    }
    ?>
    </form>
  </table>
  </div>  
  </section>  
  <div id="footer" class="section">
        <p>
            <span>ALIMAPP © 2020</span>
            <a href="#" rel="noopener" target="_blank" class="social">TWITTER</a>
            <a href="#" rel="noopener" target="_blank" class="social">YOUTUBE</a>
            <a href="#" rel="noopener" target="_blank" class="social">INSTAGRAM</a>
            <a href="#" rel="noopener" target="_blank" class="social">FLICKR</a>
            <a href="#" rel="noopener" class="social">TERMINOS DE USO</a>
            <a href="ayuda" class="social">POLITICA DE PRIVACIDAD</a>
        </p>
    </div>

    <script type="text/javascript">
    $(document).ready(function(){
      setTimeout(function(){
        $(".alert").remove();
      }, 2000);
    })
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  </body>
</html>