<?php
$n1 = trim(fgets(STDIN));
$n2 = trim(fgets(STDIN));
$valores = array($n1,$n2);
$min = min($valores)+1;
$max = max($valores);

for($min;$min<$max;$min++){
    if( ($min % 5==2) || ($min % 5==3)){
        echo $min."\n";
    }
}
?>