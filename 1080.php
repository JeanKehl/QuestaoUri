<?php
$auxiliar = 0;
$posicao = 0;
for($i = 0; $i<100; $i++){
    $numero = fgets(STDIN);
    if($numero>$auxiliar){
        $auxiliar = $numero;
        $posicao = ($i+1);
    }
}
echo $auxiliar;
echo $posicao."\n";
?>