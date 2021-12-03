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
echo "<br>";
class Pessoa{
  public  $nome;
  public  $idade;
  
  public function adicionar ($nome, $idade){
      $this->nome = $nome;
      $this->idade = $idade;
  }
  
}

$eu = new Pessoa();
$eu->adicionar ("vinicios ", 5);
echo $eu->nome, $eu->idade;
echo "<br>";
print_r ($eu);
echo "<br>";

$outro = new Pessoa();
$outro->adicionar("Krauhdyl", 50);
print_r ($outro);

echo "<br>";
echo "<hr>";

$opcao = 45;

switch($opcao):
    case 5:
        echo("numero 5");
        break;
    case 2:
        echo("numero 2");
        break;
    case 3:
        echo("numero 3");
        break;
    default:
    echo ("Nenhum das anteriores");
    break;
    endswitch;

echo "<br>";
echo "<hr>";    

$nome = "vinicios";
$idade = 22;

if (!($nome == "vinicios") xor ($idade == 22)):
    echo("Tudo Certinho");
else:
    echo("Tudo Errado");
endif;

?>