<?php   
class Carro {
    public $modelo;
    public $ano;
    public $valor;

    public function criar($modelo, $ano, $valor){
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->valor = $valor;
    }

    public function exibir(){
        echo ("Modelo: ".$this->modelo." Ano: ".$this->ano." Valor : R$".$this->valor." Mil");
    }

}

// --------------------------------------
Class Lavador{
    public $nome;
    public $idade;

    public function criar($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function exibir(){
        echo ("Nome: ".$this->nome." Idade: ".$this->idade);
    }
}
// --------------------------------------

// --------------------------------------
$carro = new Carro();

$carro->criar("Creta", 2021, 148);

$carro->exibir();
// --------------------------------------
echo "<br>";

$lavador = new Lavador();
$lavador->criar("Vinicios", 22);

$lavador->exibir();
// --------------------------------------

?>

