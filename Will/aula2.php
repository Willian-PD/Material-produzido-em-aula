<?php
// Funções matemaricas

// abs - Valor absoluto, transforma valores negativos em positivos
$a = $_GET["x"];
$b = $_GET["y"];

echo "O valor o valor absoluto de A é ".abs($a)."!";
echo "<br>O valor de B é ".($b)."!";

// sqrt - Raiz quadrada
echo "<br>A raiz de B é ".sqrt($b)."!";

// pow - Potência
echo "<br>A raiz de B é ".pow($b, 2)."!";

// Formatação de casas decimais

// number_format() - Define a quantidade de casas decimais
echo "<br>O valor de B é ".number_format(sqrt($b), 2)."!";

// round - Arredondar valores
echo "<br>O valor arredondado de B é ".round($b)."!";

// ceil - Arredonda o valor para cima
echo "<br>O valor arredondado de B é ".ceil($b)."!";

// floor - Arredonda o valor para baixo
echo "<br>O valor arredondado de B é ".floor($b)."!";

// intval - Retorna apenas o valor inteiro da variavél
echo "<br>O valor inteiro de B é ".intval($b)."!";

// Operdores de incremento: pre - incremento e pos - incremento

$c = 20;
echo "<br>O valor incrementado de $c é ".++$c; // incrementa e depois imprime
echo "<br>O valor incrementado de $c é ".$c++; // imprime o valor real e depois incrementa
echo "<br>$c";

// Operdores de decremento: pre - decremento e pos - decremento

$c = 20;
echo "<br>O valor decrementado de $c é ".--$c; // incrementa e depois imprime
echo "<br>O valor decrementado de $c é ".$c--; // imprime o valor real e depois incrementa
echo "<br>$c";


?>