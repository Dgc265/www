<?php
include_once "menu.php";

switch ($params["idnoticia"]){
            case 1:
            $sentencia= "SELECT * FROM noticias where id=1";
        foreach($conexion->query($sentencia) as $row){
       
        echo "<h2>".$row['titulo']."</h2>";
        echo "<p>".$row['cuerpo']."</p>";
    
    }
        
            $sentenciaComentarios= "SELECT * FROM comentario where idnoticia=1";
            
            echo "<h3>Comentario</h3>";
            foreach($conexion->query($sentenciaComentarios) as $row){
       
                echo "<p style='bold'>".$row['comentario']."<p>";
                
            
            }
                
                break;
                
            case 2:
            $sentencia= "SELECT * FROM noticias where id=2";
            foreach($conexion->query($sentencia) as $row){
           
            echo "<h2>".$row['titulo']."</h2>";
            echo "<p>".$row['cuerpo']."</p>";
        
        }
            
                $sentenciaComentarios= "SELECT * FROM comentario where idnoticia=2";
                
                echo "<h3>Comentario</h3>";
                foreach($conexion->query($sentenciaComentarios) as $row){
           
                    echo "<p style='bold'>".$row['comentario']."<p>";
                    
                
                }
                break;
                
            case 3:
            $sentencia= "SELECT * FROM noticias where id=3";
            foreach($conexion->query($sentencia) as $row){
           
            echo "<h2>".$row['titulo']."</h2>";
            echo "<p>".$row['cuerpo']."</p>";
        
        }
            
                $sentenciaComentarios= "SELECT * FROM comentario where idnoticia=3";
                
                echo "<h3>Comentario</h3>";
                foreach($conexion->query($sentenciaComentarios) as $row){
           
                    echo "<p style='bold'>".$row['comentario']."<p>";
                    
                
                }
                break;
            case 4:
            $sentencia= "SELECT * FROM noticias where id=4";
            foreach($conexion->query($sentencia) as $row){
           
            echo "<h2>".$row['titulo']."</h2>";
            echo "<p>".$row['cuerpo']."</p>";
        
        }
            
                $sentenciaComentarios= "SELECT * FROM comentario where idnoticia=4";
                
                echo "<h3>Comentario</h3>";
                foreach($conexion->query($sentenciaComentarios) as $row){
           
                    echo "<p style='bold'>".$row['comentario']."<p>";
                    
                
                }
                break;
        }
        ?>