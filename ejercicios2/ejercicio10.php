
<DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<title>Calculadora</title>
</head>
<body>
<form method='POST' action='ejercicio10.php'>
<div>
<label for="numero">Numero 1:</label>
<input type="text" id="numero" name="num"/>
</div>
<div>
<label for="numero2">Numero 2:</label>
<input type="text" id="numero2" name="num2"/>
</div>
<input type="radio" name="operacion" value="+"/>+
<input type="radio" name="operacion" value="-"/>-
<input type="radio" name="operacion" value="/"/>/
<input type="radio" name="operacion" value="*"/>*
<div>
</div>
<input type='submit' value='Calcular'/> </form>
<?php 
function error($err){

    if($err==0){
        throw new Exception("No se puede dividir entre 0");
    }
}
$numero1 = $_POST["num"];
$numero2 = $_POST["num2"];
$resultado;
try{
if(isset($numero1) || isset($numero2)){
    switch($_POST["operacion"]){
        case "+":
            $resultado= $numero1+$numero2;
            echo"el resultado es: $resultado";
            break;
        case "-":
            $resultado= $numero1-$numero2;
            echo"el resultado es: $resultado";
            break;
        case "/":
        error($numero2);
            $resultado= $numero1/$numero2;
            echo"el resultado es: $resultado";
            
            break;
        case "*":
            $resultado= $numero1*$numero2;
            echo"el resultado es: $resultado";
            break;
        
    }
}else{
    echo"No es un numero";
}
}catch(Exception $e){
    echo"Warning".$e->getMessage();
    $resultado = Incorrecto;
    header("Location:error.php");
    
}





?>

</body>
 </html>
