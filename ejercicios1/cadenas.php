<?php 
echo"<DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<meta charset='utf-8' />";
    echo "<title>formato</title>";
echo "</head>";
echo "<body>";
$cadena="hola";
$cadena2="hOla";
$iguales= strcmp($cadena,$cadena2);
if($iguales==0){

    echo"son iguales";
}else {
    echo "no son iguales";
}


echo "</body>";
 echo "</html>";
?>