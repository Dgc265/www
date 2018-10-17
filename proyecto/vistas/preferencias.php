<?php
include_once "menu.php";
if(isset($_FILES['fichero_usuario'])){
$dir_subida = "imagenes/";
$nombreNocortado = $_SESSION["avatar"];
//$fichero_subido = $dir_subida . basename($nombreAvatar);
$nombreAvatar =$dir_subida . substr($nombreNocortado, 0, -2);
$extension = end( explode( ".", $_FILES['fichero_usuario']['name'] ) );

if($extension == "jpg"){
move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $nombreAvatar);
setCookie("sesion",null,-1);
setcookie("sesion",$nombreNocortado,time()+604800);
header('Location: /');
}else{
    echo"no se puede";
}
}

      
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
    Enviar este fichero: <input name="fichero_usuario" type="file" />
    <input type="submit" value="Enviar fichero" />
</form>
