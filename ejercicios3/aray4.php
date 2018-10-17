<?php 
function remover ($valor,$arr)
{
    foreach (array_keys($arr, $valor) as $key) 
    {
        unset($arr[$key]);
    }
    echo "Removiendo: ".$valor."\n\n";
    return $arr;
}

$numeroMinimoValor = $_POST["num1"];
$numeroMaximoValor = $_POST["num2"];
$valorMinimo = $_POST["num3"];
$valorMaximo = $_POST["num4"];
$orden = $_POST["orden"];
$eliminar = $_POST["num5"];

$tamanyoArray=rand($numeroMinimoValor,$numeroMaximoValor);
$array = array();
for($i=$tamanyoArray;$i>=1;$i--){
array_push($array,rand($valorMinimo,$valorMaximo));


 }
 
 if($orden=="Directo"){
    sort($array);

 }
 if($orden=="Indirecto"){
     arsort($array);

 }
 if(!is_null($eliminar)){
    
    remover($eliminar,$array);


}
 



 print_r($array);

?>