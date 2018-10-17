<?php

$archivo=fopen("fichero","r");
$contenido = fgets($archivo,filesize("fichero"));
echo $contenido;
fclose($archivo);
?>