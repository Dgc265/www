<?php 
    $conexion = new PDO('mysql:host=localhost;dbname=nba','david','patata');
    if($conexion!=null){

        echo "estas conectado";
    }else{
        echo "No estas conectado";
    }
?>