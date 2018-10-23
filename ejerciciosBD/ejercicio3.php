<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    
</head>
<body>
<?php 
   $conexion = new PDO('mysql:host=localhost;dbname=nba','david','patata');
    $equipo='SELECT * FROM equipos';
    echo "<table border='1'>";
    echo "<tr><th>Nombre</th><th>Conferencia</th><th>Ciudad</th><th>Division</th></tr>";
    
    foreach($conexion->query($equipo) as $row){
        
 
        echo "<tr>";
        echo '<td><a action="EquiposJugadores.php" href="Equiposjugadores.php?equipo='.$row['Nombre'].'" name="equipo" >' . $row['Nombre'] . '</a></td>';
        echo '<td> ' . $row['Conferencia'] . '</td>';
        echo '<td> ' . $row['Ciudad'] . '</td>';
        echo '<td> ' . $row['Division'] . '</td>';
       
        echo "</tr>";
    }
    
    echo"</table>";
?> 
    
</body>
</html>