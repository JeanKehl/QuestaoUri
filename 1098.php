<?php
$i = 0;
$j = 1;
$value = 0;
$temp = 0;
$temp2 = 0;
while($i <= 2){
    if($temp2 == 0){
        echo "I=".$i." J=".$j."\n";
    }else{
        echo "I=".$i." J=".$j."\n";
    }
    $temp++;
    if($temp == 3){
        $i+=0.2;
        $value += 0.2;
        $j = $value;
        $temp = 0;
        $temp2 +=1;
        
        if($temp2 == 5){
            $temp2 = 0;
        }
      
    }
      $j++;
}
?>