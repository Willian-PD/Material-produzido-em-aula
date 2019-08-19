<?php

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

