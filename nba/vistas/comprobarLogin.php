<?php 

    $usuario= $_POST["usuario"];
    $contrasenya = $_POST["contrasenya"];
    /*$archivo = fopen("./ficheros/fichero.txt","r+");
    $array = file("./ficheros/fichero.txt");
    $tam= sizeof($array);*/
    $contra=md5($contrasenya);
$sql=("SELECT id,nombreUsuario,avatar FROM usuarios WHERE nombreUsuario=:usuario AND password=:contra Limit 1");
$sentencia= $conexion->prepare($sql);
$sentencia->bindParam(':usuario',$usuario,PDO::PARAM_STR);
$sentencia->bindParam(':contra',$contra,PDO::PARAM_STR);
$sentencia->execute();
$resultado = $sentencia->fetchAll();


foreach($resultado as $row){
    if($row['avatar']==null){
        setcookie("sesion","false",time()+604800);
    }else{
    setcookie("sesion",$row[2],time()+604800);
}
    $_SESSION["usuario"]=$row['nombreUsuario'];
    $_SESSION['id']=$row['id'];
    $_SESSION["contra"]=$contra;
    header('Location: /');
    $logueado=true;
}
  

   /* for ($i=0; $i < $tam; $i++) {  
        $cortado=explode(";",$array[$i]);
        
        for ($j=0; $j < sizeof($cortado); $j++) {
         if($cortado[$j]==$usuario && $cortado[$j+1]==$contra){
             $i=$tam;
             $avatar=$cortado[$j+2] ." ";
             echo $cortado[$j+2];
             setcookie("sesion",$avatar,time()+604800);
            $_SESSION["nombre"]=$usuario;
            $_SESSION["contra"]=$contra;
            header('Location: /');
             
             
             $logueado=true;
         }
        }
       
        
    }*/
   if($logueado!=true){
        echo"Lo sentimos fallo en el logueo";
        $logueado=false;
   }


?>