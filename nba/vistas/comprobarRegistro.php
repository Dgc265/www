<?php
 $usuario=$_POST['usuario'];
 $contra=md5($_POST['contrasenya']);
 $extension = end( explode( ".", $_FILES['avatar']['name']));
 echo $extension;
  
$sentencia=("INSERT INTO usuarios (nombreUsuario,password,avatar) VALUES('".$usuario."','".$contra."','".$extension."')");
 $resultado=$conexion->exec($sentencia);

 if($resultado==1){
 
$sentenciaid=("SELECT MAX(id) as'id' FROM usuarios");
foreach($conexion->query($sentenciaid) as $row);{
$idusuario=$row['id'];

}



  $dir_subida = "imagenes/";
 
  
  
  
 

  $nombreAvatar =$dir_subida . "avatar".$idusuario.".".$extension;
  echo $nombreAvatar;

  switch($extension){
    case "jpg":
      move_uploaded_file($_FILES['avatar']['tmp_name'], $nombreAvatar);
      
    break;
    case "jpeg":
      move_uploaded_file($_FILES['avatar']['tmp_name'], $nombreAvatar);
      
    break;
    case "png":
      move_uploaded_file($_FILES['avatar']['tmp_name'], $nombreAvatar);
      
      
    break;
    case "gif":
    move_uploaded_file($_FILES['avatar']['tmp_name'], $nombreAvatar);
    
  break;
  }
  $_SESSION["registro"]=true;
    header("Location: /login");
     
 }else{
    $_SESSION["noregistro"]=true;
    header("Location: /registro");
     
 };

?>
