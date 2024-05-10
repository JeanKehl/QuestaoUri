<?php
$numero = fgets(STDIN);

for($i=0; $i<$numero; $i++){
    $n = fgets(STDIN);
    if($n>0 && $n%2 == 0){
        echo "EVEN POSITIVE\n";
    }else if($n>0 && $n%2 !== 0){
        echo "ODD POSITIVE\n";
    }else if($n<0 &&  $n%2 == 0){
        echo "EVEN NEGATIVE\n";
    }else if($n<0 && $n%2 !== 0){
         echo "ODD NEGATIVE\n";
    }else{
        echo "NULL\n";
    }
}
