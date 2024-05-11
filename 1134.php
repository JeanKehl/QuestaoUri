
<?php
$parar = false;
$somaalcool = 0;
$somagasolina = 0;
$somadiesel = 0;
while(!$parar){
    $valor = trim(fgets(STDIN));
    if($valor<=3){
        if($valor==1){
            $somaalcool++;
        }else if($valor==2){
            $somagasolina++;
        }else{
            $somadiesel++;
        }
    }else if ($valor == 4){
        $parar = true;
    }
}
echo "MUITO OBRIGADO\n";
echo "Alcool: ".$somaalcool."\n";
echo "Gasolina: ".$somagasolina."\n";
echo "Diesel: ".$somadiesel."\n";

?>