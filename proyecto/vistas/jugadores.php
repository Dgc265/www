<html>

<?php

echo '<link rel="stylesheet" type="text/css" href='  . root . dt . css .  'jugadores.css>';
        include_once "menu.php";

        echo"<div class='panel-jugadores'>";
        echo '<img class= "campo-charlote campo-charlote--tamanyo" src='  . root . dt . imagenes .  'campo.jpg>';
        
        echo"<div class='panel-jugador--willy'>";
        echo '<a href='  . root . dt .   'jugadores/1>';
        echo '<img class= "jugador-charlote jugador-charlote--tamanyo" src='  . root . dt . imagenes .  'willy.jpg>';
        echo "</a>";
        echo"</div>";
        echo"<div class='panel-jugador--tony'>";
        echo '<a href='  . root . dt .   'jugadores/2>';
        echo '<img class= "jugador-charlote jugador-charlote--tamanyo" src='  . root . dt . imagenes .  'tony.jpg>';
        echo"</a>";
        echo"</div>";
        echo"<div class='panel-jugador--kamin'>";
        echo '<a href='  . root . dt .   'jugadores/3>';
        echo '<img class= "jugador-charlote jugador-charlote--tamanyo" src='  . root . dt . imagenes .  'kamin.jpeg>';
        echo "</a>";
        echo"</div>";
        echo"<div class='panel-jugador--macura'>";
        echo '<a href='  . root . dt .   'jugadores/4>';
        echo '<img class= "jugador-charlote jugador-charlote--tamanyo" src='  . root . dt . imagenes .  'macura.jpg>';
        echo "</a>";
        echo"</div>";
        
        echo"</div>";
        

     
    ?>



</html>