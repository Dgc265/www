<?php

$archivo=fopen("fichero","r+");
$array = file("fichero");
fclose($archivo);
unlink("fichero");
$tam= sizeof($array)-1;
$archivo=fopen("fichero","w");
 for ($i=0; $i < $tam; $i++) {  
     
     
     fwrite($archivo,$array[$i]);
     
 }

fclose($archivo);



?>