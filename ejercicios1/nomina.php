<?php 
echo"<DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<meta charset='utf-8' />";
    echo "<title>Hola mundo></title>";
echo "</head>";
echo "<body>";
    
    $nomina="1500";
    ;
    if($nomina<800){
    $incremento= $nomina*0.2;
    echo $nomina + $incremento;
    }
    elseif(800<=$nomina && $nomina<1200){
        
        echo "$nomina";


    }elseif(1200<=$nomina){

        $decremento=$nomina*0.15;
        echo $nomina - $decremento;
    }
echo "</body>";
 echo "</html>";
?>