<html>
<head>
<meta charset='utf-8' />
<title>Array</title>
</head>
<body>
<?php 
$tamanyoArray=rand(5,15);
$array = array();
for($i=$tamanyoArray;$i>=1;$i--){
array_push($array,rand(0,10));


 }  


 print_r($array);

?>

</body>
 </html>
