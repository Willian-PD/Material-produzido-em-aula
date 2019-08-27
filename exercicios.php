<?php

    $mes = $_POST["month-value"];

    switch ($mes) {
        case 1: "Janeiro";
            break;
        case 2: "Fevereiro";
            break;
        case 3: "Março";
            break;
        case 4: "Abril";
            break;
        case 5: "Maio";
            break;
        case 6: "junho";
            break;
        case 7: "Julho";
            break;
        case 8: "Agosto";
            break;
        case 9: "Setembro";
            break;
        case 10: "Outubro";
            break;
        case 11: "Novembro";
            break;
        case 12: "Dezembro";
            break;	
        default: 
            echo "Mês invalido!";
	break;
    }
    
    $fumante = $_POST["smoker"];
    $cigarro = $_POST["cigarette"];
    $preco = $_POST["cigarette"];
    $resul = $fumante * $cigarro * $preco;
    echo"Valor pago pelo feumante: $resul";
    
    $valor1 = $_POST["amalia"];
    $valor2 = $_POST["joaquim"];
    
    if($valor1 < $valor2){
	echo "<br>Joaquim é mais velho";
    }
    else if($valor1 > $valor2){
        echo "<br>Amália é mais velha";
    }
    else {
        echo "<br>Idades iguais";
    }
    
    $sortValue = rand(1,15);
    
    if($sortValue % 3 == 0 && $sortValue % 5 == 0){
        echo "Valor multiplo de 3 e 5!";
    }
    else {
        echo "Valor não é multiplo de 3 e 5!";
    }
    
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];
    
    if(($num1 == $num2) && ($num2 == $num3) && ($num1 == $num3)){
        echo"É UM TRIANGULO EQUILATERO";
    }
    else if(($num1 == $num2) && ($num1 == $num3) && ($num2 != $num3)){
        echo"É UM TRIANGULO ISÓSCILES";
    }
    else if(($num1 != $num2) && ($num1 != $num3) && ($num2 != $num3)){
        echo"É UM TRIANGULO ESCALENO";
    }
?>