<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
        include_once "menu.php";
        echo '<link rel="stylesheet" type="text/css" href='  . root . dt . css .  'login.css>';
    ?>
    
</head>
<body>
    <div class="panel-login">
        <form enctype="multipart/form-data" action="/comprobarRegistro" method="POST">
            <div class="panel-login__body">
            <label for="usuario">Usuario: </label>
            <input class="inputbox" type="text" id="usuario" name="usuario" required/>
            </div>
            <div class="panel-login__body">
            <label for="contrasenya">Contraseña: </label>
            <input type="password" id="contrasenya" name="contrasenya" required/>
            </div>
            <div>
                    
                    <input type="hidden" name="MAX_FILE_SIZE" value="" />
                    Enviar este fichero: <input name="avatar" type="file" />
            </div>
            <div class="panel-login__body panel-login__body--centro">
            <input type='submit' value='Registrarse'/>
            </div>
           
        </form>
    </div>    
    <?php
      if($_SESSION["noregistro"]==true){
        echo  '<script>
        window.alert("No se pudo registrar nombre de usuario ya en uso le redirigimos al registro")
        </script>';
        unset($_SESSION["noregistro"]);
      }
    ?>
</body>
</html>