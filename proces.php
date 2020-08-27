<?php
    $quantidade= $_POST['quantidade'];

    $vet=array();

    for($i = 2; $i <= $quantidade;$i++){

        $vet[0]=0;
        $vet[1]=1;

        $vet[$i]= $vet[$i-1] + $vet[$i-2];
    }

    echo'<h3>Sequência de Fibonacci:</h3>';
    for($j = 0; $j < $quantidade; $j++){
        echo"$vet[$j]<br/>";
    }
?>