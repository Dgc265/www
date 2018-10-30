<?php
    return array(
        "routes"=> array(
            "/"=> array(
                "route"=> "/",
                "page"=> "home.php"
            ),
            "historia"=> array(
                "route"=> "/historia",
                "page"=> "historia.php"

            ),
            "jugadores"=> array(
                "route"=> "/jugadores",
                "page"=> "jugadores.php"
            ),
            "jugador"=> array(
                "route"=> "/jugadores/:idjugador",
                "page"=> "jugador.php"
            ),
            "login"=> array(
                "route"=> "/login",
                "page"=> "login.php"
            ),
            "comprobarLogin"=> array(
                "route"=> "/comprobarLogin",
                "page"=> "comprobarLogin.php"
            ),
            "desconectar"=> array(
                "route"=> "/desconectar",
                "page"=> "desconectar.php"
            ),
            "preferencias"=> array(
                "route"=> "/preferencias",
                "page"=> "preferencias.php"
            ),
            "registro"=> array(
                "route"=> "/registro",
                "page"=> "registro.php"
            ),
            "comprobarRegistro"=> array(
                "route"=> "/comprobarRegistro",
                "page"=> "comprobarRegistro.php"
            ),
            "partidos"=> array(
                "route"=> "/partidos",
                "page"=> "partidos.php"
            ),


           
           
        ),
        "error"=> "error.php"
    );