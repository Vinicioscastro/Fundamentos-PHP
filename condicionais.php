<?php

$valor = 16;
$nota = 8;

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
echo "<br>";
echo ($nota >= 7)? "Aprovado" : "Reprovado";

?>