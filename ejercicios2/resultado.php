<?php 

$numero1 = $_POST["num"];
$numero2 = $_POST["num2"];

if(is_numeric($numero1) && is_numeric($numero2)){
    $resultado = $numero1*$numero2;
    echo "El resultado es ".$resultado;
}else {

    echo "uno de los dos no es un numero";
}

?>
