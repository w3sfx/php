<?php
//Criando Funções

function exibirNome($nome) {
    echo "Meu nome é $nome";
}

exibirNome("Wesley Victor");

echo "<hr>";

function calcularMedia($nome, $n1, $n2, $n3, $n4) {
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    if ($media >= 7):
        echo "$nome foi aprovado com a média $media.";
    else:
        echo "$nome foi reprovado com a média $media";
    endif;
}

calcularMedia("Victor", 8.5, 9, 7, 10);

echo "<hr>";

calcularMedia("Bob", 5, 7, 2, 3);