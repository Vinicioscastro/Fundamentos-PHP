<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundamentos Basicos</title>
</head>
<body>
    <h1>Olá mundo com html</h1>

    <?php 
    // comentarios
    echo "Meu nome e vinicios: <br>";
    echo "<hr>";
    print "iker";
    echo "<hr>";

    $refrigerante = "coca";
    $$refrigerante = "cr7";

    echo $$refrigerante;

    echo "<hr>";

    $vetor  = array ("Vinicios", 21, 186, false);
    var_dump($vetor);
    echo $vetor[0];

class Pessoa{
    public $nome2;
    
    public function adicionar ($n){
        $this->nome2 = $n;
    }

}

$eu = new Pessoa();

$eu->adicionar('vinicios');
echo "<br>";
echo $eu->nome2;

echo "<hr>";

$nome03 = "pereira";

echo "meu sobre nome é $nome03";

echo "<hr>";

$times = array ("flamengo", "santos", "cefesba");

print_r($times[0]);

echo "<hr>";

$carros = array();

$carros[]  = "hilux";
$carros[] = "prisma";
$carros[] = "land rouver";

print_r($carros);
echo "<br>";
echo "<hr>";


foreach($times as $unidade){
    echo $unidade."<br>";
}

    ?>
</body>
</html>