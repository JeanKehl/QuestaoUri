<?php
$notas = fgets(STDIN);
$nota = explode(" ",$notas);

$n1 = $nota[0];
$n2 = $nota[1]; 
$n3 = $nota[2];
$n4 = $nota[3];

$media = (($n1*2)+($n2*3)+($n3*4)+($n4*1)) / 10;
$mediaA = intval($media);
$decimal = explode(".",$media);
if(isset($decimal[1])){
    $mediaB = $decimal[1][0];
}else{
    $mediaB = 0;
}

$media = $mediaA.'.'.$mediaB;

if($media >= 7){
    echo "Media: ".$media."\n";
    echo "Aluno aprovado.\n";
}else if($media < 5){
    echo "Media: ".$media."\n";
    echo "Aluno reprovado.\n";
}else{
    echo "Media: ".$media."\n";
    echo "Aluno em exame.\n";
    $exame = fgets(STDIN);
    $exameMedia = ($exame + $media) / 2;
    $mediaA = intval($exameMedia);
    $decimal = explode(".",$exameMedia);
    if(isset($decimal[1])){
        $mediaB = $decimal[1][0];
    }else{
        $mediaB = 0;
    }

    $exameMedia = $mediaA.'.'.$mediaB;
    
    echo "Nota do exame: ".$exame;
    if($exameMedia >= 5){
        echo "Aluno aprovado.\n";
    }else{
         echo "\nAluno reprovado.\n";
    }

    echo "Media final: ".$exameMedia."\n";
}

?>