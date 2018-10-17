<?php 
echo"<DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<meta charset='utf-8' />";
    echo "<title>dnie</title>";
echo "</head>";
echo "<body>";

$letra="TRWAGMYFPDXBNJZSQVHLCKEO";
$numdni=53253095;
$numeroLetra=$numdni%23;
$letradni = substr($letra,$numeroLetra,1);
echo $letradni;
echo "</body>";
 echo "</html>";
?>