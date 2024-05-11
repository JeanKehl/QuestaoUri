<?php
$somador = 0;
$vitoriaInter = 0;
$vitoriaGremio = 0;
$empate = 0;
$parar = false;
while(!$parar){
    $gols = trim(fgets(STDIN));
    $gol = explode(" ",$gols);
    if($gol[0]>$gol[1]){
        $vitoriaInter++;
    }else if($gol[1]>$gol[0]){
        $vitoriaGremio++;
    }else{
        $empate++;
    }
    $somador++;
    echo "Novo grenal (1-sim 2-nao)\n";
    $novo = trim(fgets(STDIN));
    if($novo == 2){
        $parar = true;
    }
}

echo $somador. " grenais\n";
echo "Inter:".$vitoriaInter."\n";
echo"Gremio:".$vitoriaGremio."\n";
echo"Empates:".$empate."\n";
if($vitoriaInter>$vitoriaGremio){
    echo "Inter venceu mais\n";
}else if($vitoriaGremio>$vitoriaInter){
    echo "Gremio venceu mais\n";
}else{
    echo "Nao houve vencedor\n";
}