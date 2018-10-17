<?php 
echo"<DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<meta charset='utf-8' />";
    echo "<title>formato</title>";
echo "</head>";
echo "<body>";

$numero=1149.5899;
$numeroFormateado = number_format($numero,2,',',".");
echo $numeroFormateado;
echo "</body>";
 echo "</html>";
?>