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
        <form action="/comprobarLogin" method="POST">
            <div class="panel-login__body">
            <label for="usuario">Usuario: </label>
            <input class="inputbox" type="text" id="usuario" name="usuario"/>
            </div>
            <div class="panel-login__body">
            <label for="contrasenya">Contraseña: </label>
            <input type="password" id="contrasenya" name="contrasenya"/>
            </div>
            <div class="panel-login__body panel-login__body--centro">
            <input type='submit' value='Login'/>
            </div>
        </form>
    </div>    
</body>
</html>