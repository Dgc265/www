<?php

$archivo=fopen("fichero","r");
$contenido = fread($archivo,filesize("fichero"));
echo $contenido;
fclose($archivo);
?>