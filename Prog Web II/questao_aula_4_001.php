<?php
	$vetor = array();
	$maior = 0;
	$menor = 9999;
	$media = 0;
	$percentualPares = 0;
	for($i = 0; $i < 20; $i++){
		$vetor[$i] = rand(1,20);
		echo "$vetor[$i]<br>";
		if($vetor[$i] > $maior){
			$maior = $vetor[$i];
		}
		if($vetor[$i] < $menor){
			$menor = $vetor[$i];
		}
		if($vetor[$i] % 2 == 0){
			$percentualPares++;
		}
		$media += $vetor[$i];
	}

	echo"O percentual de valores pares do vetor é "
		.$percentualPares /= 100;
	
	echo"<br>A média dos velores do vetor é ".$media / $i;
?>