<?php
include_once "menu.php";

        $idpagina = $params['idnoticia'];
            
        $sentencia= "SELECT * FROM noticias where id=".$idpagina."";
        foreach($conexion->query($sentencia) as $row){
       
        echo "<h2>".$row['titulo']."</h2>";
        echo "<p>".$row['cuerpo']."</p>";
    
    }
        
            $sentenciaComentarios= "SELECT c.comentario as comentario,u.nombreUsuario as nombre FROM comentario c inner join usuarios u ON c.idUsuario=u.id where idnoticia=".$idpagina."";
            
            echo "<h3>Comentario</h3>";
            foreach($conexion->query($sentenciaComentarios) as $row){
       
               echo "<p style='bold'>Nombre: ".$row['nombre']."<p>"."<p style='bold'>Comentario:".$row['comentario']."<p>";
                
            
        
            

        } if($_SESSION["logged"]==true){
           
           
           
            echo "<form action='/noticias/".$idpagina."' method='POST'>";
            echo "<br>";
            echo "<br>";
            echo "<textarea name='comentario' required></textarea>";
            echo "<br>";
            echo "<button type='submit'>Comentar</button>";
            if($_POST['comentario']!=""){
            $texto = $_POST['comentario'];
            $sentencia=$conexion->prepare("INSERT into comentario(idUsuario,idNoticia,comentario) values(:usuario,:noticia,:comentario)");
            $sentencia->bindParam(':usuario', $_SESSION['id']);
            $sentencia->bindParam(':noticia', $idpagina);
            $sentencia->bindParam(':comentario', $texto);
            $resultado=$sentencia->execute();
            if($resultado==1){
                echo  '<script>
                window.alert("se ha puesto su comentario correctamente")
                </script>';
                header("Location: /noticias/".$idpagina."");
            }else{
                echo  '<script>
                window.alert("se ha puesto su comentario correctamente")
                </script>';
            }

        }
    }
        
        ?>
        