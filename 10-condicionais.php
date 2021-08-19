<?php

$numero = 10;

if ($numero == 10):
    echo "É igual a 10";
elseif ($numero <= 9):
    echo "É menor ou igual a 9";
else:
    echo "Não é igual a 10";
endif;
echo "<hr>";

// ? = if, : = else.
$media = 7;
echo ($media >= 7) ? "Aprovado!" : "Reprovado!";
echo "<hr>";

//Switch / Case
$cor = "vermelho";

switch ($cor):
    case "vermelho":
    echo "Sua cor preferida é o ".$cor.".";
    break;

    case "verde":
    echo "Sua cor preferida é o verde.";
    break;

    default: //Irá executar se os casos não forem verdadeiros.
    echo "Sua cor preferida não é vermelho nem verde.";
    
endswitch;