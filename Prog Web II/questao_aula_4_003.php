<?php
	$vetor = array();

	$vetor[0] = $_POST["saude"];
	$vetor[1] = $_POST["dano"];

	$saude = $vetor[0] - $vetor[1];

	if($saude > 0){
		echo "Vivo!";
	}
	if($saude < 0){
		echo "Morto!";
	}

?>