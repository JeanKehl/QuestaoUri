<?php
$n1 = trim(fgets(STDIN));
$n2 = trim(fgets(STDIN));
$valor = array($n1,$n2);
$max = max($valor);
$min = min($valor);
$contador = 0;

for($min; $max>=$min; $min ++){
    if ($min %13 !== 0){
        $contador+=$min;
    }
}

echo $contador."\n";

?>