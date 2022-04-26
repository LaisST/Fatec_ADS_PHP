<?php
/*exercicio5.php*/
$input = $_GET['input'];
$F = floatval($input);
$C = 5.0 * ($F - 32.0) / 9.0;

echo "$F ºF  =  $C ºC";

?>