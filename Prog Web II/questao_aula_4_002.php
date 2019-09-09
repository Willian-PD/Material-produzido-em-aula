<?php
	$vetor = array();

	$vetor[0] = $_POST["nota1"];
	$vetor[1] = $_POST["nota2"];
	$vetor[2] = $_POST["nota3"];

	for($i = 0; $i < count($vetor); $i++){
		echo "$vetor[$i] ";
	}

?>