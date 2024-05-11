<?php
$parar = false;
while(!$parar){
    $senha = trim(fgets(STDIN));
    if($senha == 2002){
        $parar = true;
    }else{
        echo "Senha Invalida\n";
    }
}
echo "Acesso Permitido\n";
?>