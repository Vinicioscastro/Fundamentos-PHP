<?php
echo "<hr>";
echo "<hr>";
$valor = 6;
$nota = 8;
$nome = "Emanuela";

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
echo "<hr>";
echo ($nota >= 7)? "Aprovado" : "Reprovado";
echo "<hr>";
echo "<hr>";

$cartao = 631+15+11+100;
$casa = 18+200+51+50;
echo ("Dividas da casa: $casa <br>");
echo ("Cartão esse mês $cartao reais <br>" );
//echo $cartao - 170;
echo ("meu nome é  $nome");
?>