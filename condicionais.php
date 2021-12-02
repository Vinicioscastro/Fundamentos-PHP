<?php

$valor = 16;

if($valor%2==0){
    echo ("Par");
    echo "<br>";
    if($valor > 10){
        echo ("Maior que 10");
    }else {
        echo ("Menor que 10");
    }
}else {
    echo ("Impa");
}

?>