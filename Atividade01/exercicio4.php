<?php
/*exercicio4.php*/
$input = $_GET['input'];
$C = floatval($input);
$F = $C * (9.0/5.0) + 32.0;

echo "$C ºC  =  $F ºF";

?>