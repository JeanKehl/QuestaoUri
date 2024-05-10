<?php
$parar = false;
while(!$parar){
    $somador = 0;
    $numeros = trim(fgets(STDIN));
    $numero = explode(" ",$numeros);
    $maior = max($numero);
    $menor = min($numero);
    if($menor > 0){
        for($menor;$menor<=$maior;$menor++){
            $somador += $menor;
            echo $menor." ";
        }   
        echo "Sum=".$somador."\n";
    }else{
        $parar = true;
    }
}