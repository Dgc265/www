<?php
include_once "menu.php";

if(isset($_FILES['fichero_usuario'])){
if (is_uploaded_file($_FILES['fichero_usuario']['tmp_name'])==true){
$dir_subida = "imagenes/";
$nombreNocortado = $_SESSION["avatar"];
//$fichero_subido = $dir_subida . basename($nombreAvatar);

$extension = end( explode( ".", $_FILES['fichero_usuario']['name'] ) );
$nombreAvatar =$dir_subida . "avatar".$_SESSION['id'].".".$extension;

if($extension == $_COOKIE["sesion"]){
    unlink(imagenes. "avatar".$_SESSION['id'].".gif");
    unlink(imagenes. "avatar".$_SESSION['id'].".jpg");
    unlink(imagenes. "avatar".$_SESSION['id'].".jpeg");
    unlink(imagenes. "avatar".$_SESSION['id'].".png");
move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $nombreAvatar);
setCookie("sesion",null,-1);
setcookie("sesion",$extension,time()+604800);
}else{
 $sentencia= $conexion->prepare("UPDATE usuarios SET avatar=:extension WHERE id=:id");
 $sentencia->bindParam(':extension',$extension,PDO::PARAM_STR);
 $sentencia->bindParam(':id',$_SESSION['id'],PDO::PARAM_STR);
  $resultado=$sentencia->execute();
  echo $resultado;

 if($resultado==1){
    
    unlink(imagenes. "avatar".$_SESSION['id'].".gif");
    unlink(imagenes. "avatar".$_SESSION['id'].".jpg");
    unlink(imagenes. "avatar".$_SESSION['id'].".jpeg");
    unlink(imagenes. "avatar".$_SESSION['id'].".png");
    move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $nombreAvatar);
    setCookie("sesion",null,-1);
    setcookie("sesion",$extension,time()+604800);
    header("location: /preferencias");
}

    
}

}else{
    echo "fichero corrupto no se puede subir";
}  

//}   
/*$archivo = fopen("./ficheros/fichero.txt","r+");
$array = file("./ficheros/fichero.txt");
$tam= sizeof($array);
    fclose($archivo);
    unlink("./ficheros/fichero.txt");
    $archivo=fopen("./ficheros/fichero.txt","w");
      
         
         
        for ($i=0; $i < $tam; $i++) {  
            
            $cortado=explode(";",$array[$i]);
            
            
            for ($j=0; $j < sizeof($cortado); $j++) {
             if($cortado[$j]==$_SESSION["nombre"] && $cortado[$j+1]==$_SESSION["contra"]){
                 
                 
                 fwrite($archivo,$_SESSION["nombre"].";".$_SESSION["contra"].";".$_FILES['fichero_usuario']['name']."\n");
             $i++;
             }
            
            }
            fwrite($archivo,$array[$i]);
        }
         
     
    
    fclose($archivo);*/
?>
<form enctype="multipart/form-data" action="/preferencias" method="POST">
    <!-- MAX_FILE_SIZE debe preceder al campo de entrada del fichero -->
    <input type="hidden" name="MAX_FILE_SIZE" value="" />
    <!-- El nombre del elemento de entrada determina el nombre en el array $_FILES -->
    Enviar este fichero: <input name="fichero_usuario" type="file" accept="image/*" />
    <input type="submit" value="Enviar fichero" />
</form>