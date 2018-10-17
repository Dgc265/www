
<DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<title>Calculadora</title>
</head>
<body>
<form method='POST' action='factorial.php'>
<div>
<label for="numero">Numero 1:</label>
<input type="text" id="numero" name="num"/>
</div>
<input type='submit' value='Calcular Factorial'/> </form>
<?php 

function calculofactorial(){
    
    $numero1 = $_POST["num"];
    $numero2=$numero1;
    $resultado=1;
    while($numero2>=1){
        echo " ".$resultado." x ".$numero2." = ";
        $resultado*=$numero2;
        $numero2--;



    }
    echo $resultado;


    
}
calculofactorial();


?>

</body>
 </html>