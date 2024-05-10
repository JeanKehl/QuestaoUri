<?php
$lados = fgets(STDIN);
$lado = explode(" ",$lados);
$a = $lado[0];
$b = $lado[1]; 
$c = $lado[2];

$array = array($a,$b,$c);

rsort($array);
 
 $a = $array[0];
 $b = $array[1];
 $c = $array[2];



if($a >= ($b+$c)){
    echo "NAO FORMA TRIANGULO\n";
}else{
    $quadradoA = $a * $a;
    $quadradoB = $b * $b;
    $quadradoC = $c * $c;
    if($quadradoA == $quadradoB + $quadradoC ){
        echo "TRIANGULO RETANGULO\n";
    }
    $soma = $quadradoB + $quadradoC;
    if($quadradoA > $quadradoB + $quadradoC ){
        echo "TRIANGULO OBTUSANGULO\n";
    }
    
    if($quadradoA < ($quadradoB + $quadradoC)){
        echo "TRIANGULO ACUTANGULO\n";
    }
    
    if($a == $b && $a == $c && $b==$c){
       echo "TRIANGULO EQUILATERO\n";
    }
    
    if($a == $b && $a != $c){
        echo "TRIANGULO ISOSCELES\n";
    }else if($a == $c && $a != $b){
        echo "TRIANGULO ISOSCELES\n";
    }else if($b == $a && $b!= $c){
        echo "TRIANGULO ISOSCELES\n";
    }else if($b == $c && $b != $c){
        echo "TRIANGULO ISOSCELES\n";
    }else if($c == $a && $c != $b){
        echo "TRIANGULO ISOSCELES\n";
    }else if ($c == $b && $c != $a){
        echo "TRIANGULO ISOSCELES\n";
    }
    
}





?>
