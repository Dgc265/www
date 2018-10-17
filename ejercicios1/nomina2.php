<?php 
echo"<DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<meta charset='utf-8' />";
    echo "<title>Hola mundo></title>";
echo "</head>";
echo "<body>";
    
    switch($nomina="700"){
    
    case($nomina<800):
    $incremento= $nomina*0.2;
    echo $nomina + $incremento;
    break;
    case (800<=$nomina && $nomina<1200):
        
        echo "$nomina";
    break;

    case(1200<=$nomina):

        $decremento=$nomina*0.15;
        echo $nomina - $decremento;
    }
echo "</body>";
 echo "</html>";
?>