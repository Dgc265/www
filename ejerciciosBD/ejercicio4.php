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
<body>
<form action="ejercicio4.php" method="POST">
<select id="equipos" name="equiposnba">
<?php 
 
 $conexion = new PDO('mysql:host=localhost;dbname=nba','david','patata');
 $equipo='SELECT * FROM equipos';
 
 foreach($conexion->query($equipo) as $row){
     

    echo '<option value='.$row['Nombre'].'>' . $row['Nombre'] . '</option>';
    
 }
 

?>
<input type="submit" name="equipo" value="seleccionar">
</select>

</form>

              
               
        <?php 
           
          
           
               $equipo = $_POST['equiposnba'];
               $sql='SELECT * FROM jugadores Where Nombre_equipo=:equipo';
               $sentencia= $conexion->prepare($sql);
               $sentencia->bindParam(':equipo',$equipo,PDO::PARAM_STR);
               $sentencia->execute();
               $resultado = $sentencia->fetchAll();
               if($equipo!=null){
               echo "<table border='1'>";
               echo "<tr><th>Codigo</th><th>Nombre</th><th>Equipo</th><th>Altura</th><th>Peso</th><th>Posicion</th><th>Procedencia</th></tr>";
            }
               
               foreach($resultado as $row){
                   
            
                   echo "<tr>";
                   echo '<td> ' . $row['codigo'] . '</td>';
                   echo '<td> ' . $row['Nombre'] . '</td>';
                   echo '<td> ' . $row['Nombre_equipo'] . '</td>';
                   echo '<td> ' . $row['Altura'] . '</td>';
                   echo '<td> ' . $row['Peso'] . '</td>';
                   echo '<td> ' . $row['Posicion'] . '</td>';
                   echo '<td> ' . $row['Procedencia'] . '</td>';
                  
                   echo "</tr>";
               }
               
               echo"</table>";
            

           ?>
        


    
</body>
</html>