<?php
include_once "menu.php";

switch ($params["idjugador"]){
            case 1:
                include_once "jugador1.php";
                break;
                
            case 2:
                include_once "jugador2.php";
                break;
                
            case 3:
                include_once "jugador3.php";
                break;
            case 4:
                include_once "jugador4.php";
                break;
        }
        ?>