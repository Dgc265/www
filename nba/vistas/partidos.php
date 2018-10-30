<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<?php
   include_once "menu.php";
?>

<body>
<form action="/partidos" method="POST">
<select id="select" name="temporadaElegida">
<?php 
 
 
 $temporada='SELECT temporada FROM partidos GROUP BY temporada';
 
 foreach($conexion->query($temporada) as $row){
     

    echo '<option value='.$row['temporada'].'>' . $row['temporada'] . '</option>';
    
 }
 

?>
<input type="submit" name="equipo" value="seleccionar">
</select>

</form>

        <?php 
           
          
           
           $temporada = $_POST['temporadaElegida'];
           $sql='SELECT * FROM partidos Where temporada=:temporada AND (equipo_local= "Hornets" OR equipo_visitante="Hornets")';
           $sentencia= $conexion->prepare($sql);
           $sentencia->bindParam(':temporada',$temporada,PDO::PARAM_STR);
           $sentencia->execute();
           $resultado = $sentencia->fetchAll();
           if($temporada!=null){
           echo "<table border='1'>";
           echo "<tr><th>Equipo local</th><th>Equipo Visitante</th><th>Puntos Local</th><th>Puntos Visitante</th><th>Temporada</th></tr>";
        }
           
           foreach($resultado as $row){
               
        
               echo "<tr>";
               echo '<td> ' . $row['equipo_local'] . '</td>';
               echo '<td> ' . $row['equipo_visitante'] . '</td>';
               echo '<td> ' . $row['puntos_local'] . '</td>';
               echo '<td> ' . $row['puntos_visitante'] . '</td>';
               echo '<td> ' . $row['temporada'] . '</td>';
               
              
               echo "</tr>";
           }
           
           echo"</table>";
        

       ?>
</body>
</html>