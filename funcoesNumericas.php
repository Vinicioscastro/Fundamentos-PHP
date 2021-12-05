<?php

/*
funções Numericas
*/

//number_format

$preco1 = 1234.56;

$preco = number_format($preco1, 2, ",","." );

echo("o valor do produto é R$: $preco");
echo("<hr>");

echo round(3.5); // arredonda
echo("<br>");
echo ceil (8.1); //arredonda pra cima
echo("<br>");
echo floor (8.9); //arredonda pra baixo
echo("<br>");
$sorteio = array(rand(1,10));
echo rand(1, 10); // gera um numero aleatorio entre 1 e 10;
echo("<br>");
print_r ($sorteio);
echo("<br>");
echo ("O numero sutedo entre 0 - 100 foi o: ".rand(0, 100));

?>