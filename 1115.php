<?php
$parar = false;
while(!$parar){
    $numeros = trim(fgets(STDIN));
    $numero = explode(" ",$numeros);
    
    if($numero[0]==0 || $numero[1] == 0){
        $parar = true;
    }else {
        if($numero[0]>0 && $numero[1]>0){
            echo "primeiro\n";
        }else if($numero[0]>0 && $numero[1]<0){
            echo "quarto\n";
        }else if($numero[0]<0 && $numero[1]<0){
            echo "terceiro\n";
        }else{
            echo "segundo\n";
        }
    }
}

?>