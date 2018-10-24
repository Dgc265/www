<?php 
    try{
        
        $conexion = new PDO('mysql:host=localhost;dbname=nba','david','patata');
    

        echo "estas conectado";
    }catch(PDOException $e){
        echo "No estas conectado";
    }
?>