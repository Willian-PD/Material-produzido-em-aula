<?php
	$vetor = array();

	$vetor[0] = $_POST["a"];
	$vetor[1] = $_POST["b"];
	$vetor[2] = $_POST["c"];
	$vetor[3] = $_POST["d"];

	echo "Soma: ".($vetor[0] + $vetor[2]);
	echo "<br>Multiplicação: ".($vetor[1] * $vetor[3]);
?>