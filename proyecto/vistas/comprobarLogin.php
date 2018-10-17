<?php 

    $usuario= $_POST["usuario"];
    $contrasenya = $_POST["contrasenya"];
    $archivo = fopen("./ficheros/fichero.txt","r+");
    $array = file("./ficheros/fichero.txt");
    $tam= sizeof($array);
    $contra=md5($contrasenya);
    

    for ($i=0; $i < $tam; $i++) {  
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
       
        
    }
   if($logueado!=true){
        echo"Lo sentimos fallo en el logueo";
   }


?>