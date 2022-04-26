<?php
/*exercicio10.php*/
$input = $_GET['input'];
$dia = intval($input);
switch($dia){
    case 1: 
        echo 'Domingo';
        break;
    case 2:
        echo 'Segunda-Feira';
        break; 
    case 3:
        echo 'Terça-Feira';
        break;
    case 4:
        echo 'Quarta-Feira';
        break;
    case 5:
        echo 'Quinta-Feira';
        break;
    case 6:
        echo 'Sexta-Feira';
        break;
    case 7:
        echo 'Sábado';
        break;
    default:
        echo "O valor de $numero não corresponde aos condicionais anteriores";
        break;
}
?>