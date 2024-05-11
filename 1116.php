<?php
$entrada = trim(fgets(STDIN));

for($entrada; $entrada>0; $entrada--){
    $numeros = trim(fgets(STDIN));
    $numero = explode(" ",$numeros);
    if($numero[1] == 0){
        echo "divisao impossivel\n";
    }else{
         echo number_format($numero[0]/$numero[1],1,'.','')."\n";
    }
}


?>