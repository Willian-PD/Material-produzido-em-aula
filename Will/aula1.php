<?php
$n1 = 10;
$n2 = 20;
$nome = "Willian";

echo"O valor de n1 é: $n1<br>";
echo"O valor de n2 é: $n2<br>";
echo"O nome é: $nome<br>";

// operadores aritiméticos +, -, *, /, %

//  soma
$soma = $n1 + $n2;
echo"A soma dos valores é: $soma<br>";

//  subtração
$subtração = $n1 - $n2;
echo"A subtração dos valores é: $subtração<br>";

//  multiplicação
$multiplicacao = $n1 * $n2;
echo"A multiplicação dos valores é: $multiplicacao<br>";

//  divisão
$divisao = $n1 / $n2;
echo"A divisão dos valores é: $divisao<br>";

//  resto
$resto = $n1 % $n2;
echo"O resto da divisão é: $resto<br>";

// Incerção de dados com GET
$a = $_GET["x"];
$b = $_GET["y"];
$c = $_GET["z"];

echo"<br>Valor de a: $a<br>";
echo"Valor de b: $b<br>";
echo"Valor de c: $c<br>";

$somaValores = ($a + $b + $c) / 3;

echo "A média das notas é: $somaValores<br>";
echo "A média das notas é: ".($a + $b + $c) / 3;


?>
