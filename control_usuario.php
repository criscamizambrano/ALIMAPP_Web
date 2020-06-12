<?php 
    include 'conexion.php';
    include 'establecer_sesion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maxium-scale=1.0, minium-scale=1.0">
    <title>ALIMAPP</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/formulario.css">
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
                <li><a id="btn_iniciar_sesion" href="iniciar_sesion_web"><span class="icon-user"></span><?php echo $resnombre?></a></li>
            </ul>
        </nav>
    </header>
    <container>
    
    <section>
         

        <div class="user-form">
            <h1 class="sign-in__title user-form__title">¡Bienvenido <?php echo $nombre?> a ALIMAPP!</h1>
            <h2>Desde aqui puedes gestionar tu cuenta</h2>
            <div class="sso-verification-form hidden">
                <div class="sso-verification-form__error"></div>

            </div>
            <form class="sign-in__form user-form__form" action="iniciar_sesion.php" accept-charset="UTF-8" method="POST">
                <div class="user-form__content"><input type="hidden" name="course" id="course" />
                    <fieldset class="user-form__fieldset"><label class="user-form__label">Correo:</label><input placeholder="<?php echo $correo ?>" class="sign-in__field user-form__field" autocorrect="off" autocapitalize="off" type="text" name="correo" id="session_login" /></fieldset>
                    <fieldset class="user-form__fieldset"><label class="user-form__label">Contraseña:</label><input placeholder="*********" class="sign-in__field user-form__field" type="password" name="clave" id="session_password" /></fieldset>
                    <fieldset class="user-form__fieldset"><label class="user-form__label">Para aplicar los cambios es necesaria tu contraseña actual</label><input placeholder="Contraseña actual" class="sign-in__field user-form__field" type="password" name="clave" id="session_password" /></fieldset>    
                </fieldset><button name="modificar" type="submit" class="sign-in__button user-form__button">Modificar datos</button>
                </fieldset><button name="eliminar" type="submit" id="button-eliminar">Elimina tu cuenta</button>
                    <fieldset class="user-form_button"><input type="hidden" name="token" id="token" /></form><a class="sign-in__forgot-password-link user-form__info-link" href="#">¿Olvidaste tu contraseña?</a></fieldset>
                </div>
            </form>
        </div>
    </section>

    </container>
    
   
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
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/menu.js"></script>
</body>
</html>