<?php
echo '<link rel="stylesheet" type="text/css" href='  . root . dt . css .  'jugador.css>';
 $sentencia='SELECT * FROM jugadores WHERE codigo=4 LIMIT 1';
 
 foreach($conexion->query($sentencia) as $row){
     

    
    
 

echo"<div class='panel-jugador'>";
echo"<h2>".$row['Nombre']."</h2>";
    echo"<h3>".$row['Posicion']." | ".$row['codigo']." | ".$row['Nombre_equipo']."</h3>";
        echo '<img class= "jugador-charlote jugador-charlote--tamanyo" src='  . root . dt . imagenes .  $row['foto'].'>';
        
        echo"<p><br>
        Altura: ".$row['Altura']." m </p>
       <p> Peso: ".$row['Peso']." kg</p>
       <p>  Nacionalidad: ".$row['Procedencia']."</p>";
        echo"</div>";
 }
        ?>