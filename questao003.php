<?php

/* 
 * 3)Elaborar um programa para uma pizzaria, o qual 
 * leia o valor total de uma conta e quantos clientes 
 * vão paga-lá. Calcule e informe o valor a ser pago por cliente.
 */

$debito = $_GET["x"];
$clientes = $_GET["y"];
$debito /= $clientes;

echo "O total a ser pago é $debito";

?>
