
<DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<title>Calculadora</title>
</head>
<body>
<form method='POST' action='factorial2.php'>
<div>
<label for="numero">Numero 1:</label>
<input type="text" id="numero" name="num"/>
</div>
<input type='submit' value='Calcular Factorial'/> </form>
<?php 
$numero2 = $_POST["num"];




function calculofactorial($numero2){
    
    
    
    if($numero2==1){
        return 1;
        

    }else{
        return $numero2*calculofactorial($numero2-1);
        
    }

    
    


    
}
echo calculofactorial($numero2);



?>

</body>
 </html>