<?php
    $conexion = new PDO('mysql:host=localhost;dbname=nba','david','patata');
    $equipo=$_GET['equipo'];
    $sql='SELECT * FROM jugadores Where Nombre_equipo=:equipo';
    $sentencia= $conexion->prepare($sql);
    $sentencia->bindParam(':equipo',$equipo,PDO::PARAM_STR);
    $sentencia->execute();
    $resultado = $sentencia->fetchAll();
    echo "<table border='1'>";
    echo "<tr><th>Codigo</th><th>Nombre</th><th>Equipo</th><th>Altura</th><th>Peso</th><th>Posicion</th><th>Procedencia</th></tr>";
    
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