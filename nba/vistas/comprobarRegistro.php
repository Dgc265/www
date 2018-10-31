<?php
 $usuario=$_POST['usuario'];
 $contra=md5($_POST['contrasenya']);
 $extension = end( explode( ".", $_FILES['avatar']['name']));
 echo $extension;
  
$sentencia=("INSERT INTO usuarios (nombreUsuario,password,avatar) VALUES('".$usuario."','".$contra."','".$extension."')");
 $resultado=$conexion->exec($sentencia);

 if($resultado==1){
  echo  '<script>
window.alert("Ya esta registrado Los charlotte hornets le damos al Bienvenida")
</script>';
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
    //header("Location: /");
     
 }else{
    echo  '<script>
    window.alert("No se pudo registrar nombre de usario ya en uso le redirigimos al registro")
    </script>';
  // header("Location: /registro");
     
 };

?>
