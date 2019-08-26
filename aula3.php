<?php
// Condicionais if, else, else if
	$ano = $_POST["date-value"];
	$idade = date("Y") - $ano;
	echo "Você nasceu em $ano e tem $idade anos";

	if($idade >= 18){
		$voto = "Pode votar!";
		$dirigir = "Pode dirigir!";
	}
	else {
		$voto = "Não pode votar!";
		$dirigir = "Não pode dirigir!";	
	}

	echo "Você $voto e $dirigir";

	// Calcular o IMC

	$peso = $_POST["weight-value"];
	$altura = $_POST["height-value"];

	echo "<br>O peso digitado é: $peso.kg";
	echo "<br>A altura digitada é: $altura.m";

	$imc = $peso / ($altura * $altura);

	echo "<br>O imc correspondente é: ".round($imc);

	if($imc <= 18.5){
		echo "<br>Abaixo do peso!";
	}
	else if($imc >= 18.6 && $imc <= 29.9){
		echo "<br>Peso ideal!";
	}
	else if($imc >= 18.6 && $imc <= 29.9){
		echo "<br>Obeso!";	
	}
	else if($imc >= 30 && $imc <= 34.9){
		echo "<br>Obeso!";	
	}
	else{
		echo "<br>Obesidade morbida!";
	}

	echo "<br>";
	// Switch, condição multipla

	$dia = $_POST["day-value"];

	switch ($dia) {
		case 2: 
			"Segunda";
		case 3: 
			"Terça";
		case 4: 
			"Quarta";
		case 5: 
			"Quinta";
		case 6: 
			"Sexta";
			
				echo "Levanta pra trabalhar!";
		break;
		
		case 1: 
			"Domingo";
		case 7: 
			"Sábado";
			echo "Bora jogar!";
		
		default: 
			echo "Dia da semana inválido";
			
		break;
	}
?>
