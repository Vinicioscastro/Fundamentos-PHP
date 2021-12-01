<?php

$hilux = array("nova", 2021, "250 mil" );
$land = array ("nova", 2022, "450 mil");
$chevrolet = array ("prisma", 2015, "50 mil");

echo "--------Carros-------";

echo "<hr>";
foreach($hilux as $unidade){
    echo "$unidade <br>";
}


$carros = array ($hilux, $land, $chevrolet);
echo "<hr>";

print_r($carros);
echo "<hr>";

$hilux[] = "batida";
print_r($hilux);
print_r($carros);
echo "<hr>";

$pessoa
?>