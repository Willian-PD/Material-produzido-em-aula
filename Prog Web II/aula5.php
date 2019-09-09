<?php

// Rotinas em parametros dinamicos - Argumentos

/* func_get_args() - função para pegar os argumentos 
que foram passados e inseridos dentro de um array*/

/* func_num_args() - função que retorna o numero de argumentos que foram
passados*/

// Exemplo de soma de multiplos valores

	function soma(){
		$p = func_get_args();
		$t = func_num_args();
		$soma = 0;
		for($i = 0; $i < $t; $i++){
			$soma += $p[$i];
		}
		return $soma;
	}
	$r = soma(30, 20, 40, 50);
	echo "A soma dos valores de r é $r";

/* Procedimento: Posso retornar valores de 2 maneiras
 * Valor - passo o valor por parâmetro
*/

	function teste($x){
		$x = $x + 2;
		return $x;
	}
	$a = 5;
	echo "<br>A soma de x é ".teste($a);

// Referencia

	function teste1(&$y){
		$y = $y + 2;
		return $y;
	}
	$b = 10;
	echo "<br>A soma de x é ".teste1($b);
/* Manipulação de string
// 1ª função - printf
// % para mostrar que é uma string
   %f como é um número, o f de float, se quiser formatar
   as casas decimais insiro %.2f antes do f, isso significa
   que vou ter casas 2 decimais após a virgula
*/
	$p = "Açúcar";
   	$preco = 1.5694;
   	echo "<br> $p custa R$".number_format($preco, 2); // Antes
   	printf("<br>O %s custa R$%.2f", $p, $preco);

// 2º função - print_r 
// Usa-se para mostrar detalhes de uma variavel

	$d = [5, 9, 1];
	echo "<br>";
	print_r($d);

// Pode-se substituir o print_r por, var_dump ou var_export

	// var_dump
	echo"<br>";
	var_dump($d);

	// var_export
	echo"<br>";
	var_dump($d);

/* 3° função - wordwrap (para fazer quebra de linha)*/
	
	$texto = "vamos inserir um texto gigante para testarmos a função";

	$result = wordwrap($texto, 5, "<br>");

	echo $result;

?>