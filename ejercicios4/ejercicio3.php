<?php

$archivo=fopen("fichero","a");
$texto="\n estoy bien gracias \n";
fwrite($archivo,$texto);
fclose($archivo);
$archivo=fopen("fichero","r");
$contenido = fread($archivo,filesize("fichero"));
echo $contenido;
fclose($archivo);
?>