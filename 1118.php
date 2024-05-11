<?php
$parar = false;

while(!$parar){
    $resp = 3;
    $somador = 0;
    for($i = 0; $i<2;$i++){
        $n1 = trim(fgets(STDIN));
        if($n1>=0 && $n1<=10){
            $somador+=$n1;
        }else{
            echo "nota invalida\n";
            $i--;
        }
    }
    $media = $somador/2;
    echo "media = ".number_format($media,2,'.','')."\n";
    
    while($resp>2){
        echo "novo calculo (1-sim 2-nao)\n";
         $resp = trim(fgets(STDIN));
    }
    
    if($resp > 1){
        $parar = true;
    }
}
?>