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

// Exemplo prático

$num1 = 2;
$num2 = 4;
$num3 = 8;

$resultado1 = ++$num2 - $num1;
$resultado2 = $num3-- + $num1;

echo "<br>O valor de resposta1 é ".$resultado1."<br>O valor de resposta2 é ".$resultado2;

// Operadores de atribuição
$valor = 20;
$valor += 30;
echo "<br>A soma dos valores é ".$valor;
$valor *= 30;
echo "<br>O produto dos valores é ".$valor;
$valor /= 30;
echo "<br>O quoeficiente dos valores é ".$valor;

// Operador ternário
$n1 = $_GET["a"];
$n2 = $_GET["b"];

$maior = $n1 > $n2 ? $n1 : $n2;
echo "<br>O maior valor é ".$maior;

// Operadores relacionais
// Operador igual == Verifica a equidade dos dados
$w = 3;
$m = "3";

$result = ($w == $m) ? true : false;
echo"<br>O valor é diferente? ". $result;

// Operador diferente != Verifica a equidade dos dados
$w = 3;
$m = "3";

$result = ($w != $m) ? true : false;
echo"<br>O valor é diferente? ". $result;

// Operador identeidade === Verifica a equidade total dos dados
$w = 3;
$m = "3";

$result = ($w === $m) ? true : false;
echo"<br>O valor é diferente? ". $result;

// Operador identeidade !== Verifica a equidade total dos dados
$w = 3;
$m = "3";

$result = ($w !== $m) ? true : false;
echo"<br>O valor é diferente? ". $result;

// Operadores lógicos and(&&), or(||) e not(!)
$ano = $_GET["e"];
$idade = 2019 - $ano;

echo"<br>Nascidos em $ano tem idade igual a $idade";
$voto = ($idade >=18) && ($idade <= 65) ? "obrigatório" : "não obrigatório";
echo"<br>Seu voto é $voto";

?>