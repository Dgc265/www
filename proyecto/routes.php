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
           
        ),
        "error"=> "error.php"
    );