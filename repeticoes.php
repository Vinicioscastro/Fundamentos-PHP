<?php 
//While & Do While

$contador = 1;

while($contador <= 10):
    echo("contador: $contador <br>");
    $contador++;
endwhile;
echo("<hr>");
$contador = 1;
do{
    echo("Contador é: $contador <br>");
    $contador++;

} while($contador<=10);

echo("<hr>");

for($i =0; $i<=10; $i++){
    for($j=0; $j<10;$j++){
        echo("$i x $j =>".($i*$j)."<br>");
    }
    echo("<br>");
}

?>
