<?php
 $usuario=$_POST['usuario'];
 $contra=crypt($_POST['contrasenya']);
$sentencia=("INSERT INTO usuarios (nombreUsuario,password) VALUES('".$usuario."','".$contra."')");
 $resultado=$conexion->exec($sentencia);
 if($resultado==1){
  echo  '<script>
window.alert("Ya esta registrado Los charlotte hornets le damos al Bienvenida")
</script>';
    header("Location: /");
     
 }else{
    echo  '<script>
    window.alert("No se pudo registrar nombre de usario ya en uso le redirigimos al registro")
    </script>';
    header("Location: /registro");
     
 };

?>
