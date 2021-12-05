<?php

function exibirNome($nome, $idade){
    echo($nome."<br>");
    echo($idade);
}

exibirNome("vinicios", 22);

echo("<hr>");

function calcularAluno($nome, $n1, $n2, $n3){
    $media = ($n1+$n2+$n3)/3;
    if($media>=7){
        echo("Parabéns $nome, você foi aprovado com média $media");
    }else{
        echo("$nome, infelizmente você reprovou com média: $media");
    }

}

calcularAluno("Vinicios", 10,8,10);
?>