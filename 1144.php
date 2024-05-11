<?php
$n1 = trim(fgets(STDIN));
for($i = 1; $i<=$n1;$i++){
    echo ($i." ".($i*$i)." ".($i*$i*$i)."\n");
    echo($i." ". (($i*$i)+1)." ". (($i*$i*$i)+1)."\n" );
}
?>