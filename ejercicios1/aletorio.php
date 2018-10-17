<?php 
echo"<DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<meta charset='utf-8' />";
    echo "<title>Hola mundo></title>";
echo "</head>";
echo "<body>";
define("limite",55);

 $numero=rand(1,limite);
 if($numero%2==0){

    echo"El numero es par: $numero";
 }else{
     echo"no es par: $numero";
 }
echo "</body>";
 echo "</html>";
?>