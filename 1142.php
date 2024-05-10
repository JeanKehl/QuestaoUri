<?php
$numero = fgets(STDIN);
$num = 1;
for($i=0; $i<$numero; $i++){
    for($j=0; $j<3; $j++){
        echo $num." ";
        $num++;
    }
    echo "PUM\n";
    $num++;
}
?>