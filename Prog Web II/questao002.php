<?php

/*2)Elaborar um programa que leia o valor de um jantar.Calcule e informe 
 * o valor da taxa do garçon(10%) e o valor total a ser pago. */

$valor = $_GET["x"];
$valor *= 1.1;

echo "O total a ser pago é $valor";

?>
