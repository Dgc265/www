<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Noticias</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
</head>
<body>
 <?php
 include_once "menu.php";
    $sentencia= "SELECT titulo FROM noticias";
    foreach($conexion->query($sentencia) as $row){
        echo '<a href='  . root . dt .   'noticias/1>';
        echo "<h2>".$row['titulo']."</h2>";
        echo"</a>";
        
        
    }
 ?>  
</body>
</html>