<?php 
$numeroMinimoValor = $_POST["num1"];
$numeroMaximoValor = $_POST["num2"];
$valorMinimo = $_POST["num3"];
$valorMaximo = $_POST["num4"];

$tamanyoArray=rand($numeroMinimoValor,$numeroMaximoValor);
$array = array();
for($i=$tamanyoArray;$i>=1;$i--){
array_push($array,rand($valorMinimo,$valorMaximo));


 }  



 print_r($array);

?>