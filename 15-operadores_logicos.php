<?php
//Operadores lógicos.

$idade = 25;
$nome = "João";

//e (&& - and).
if(($idade == 25) && ($nome == "João")):
    echo "É verdadeiro";
else:
    echo "É falso";
endif;
echo "<hr>";

//ou (|| - or), retorna o "É verdadeiro", se as 2 ou uma das 2 opções forem verdadeiras.
if(($idade == 18) || ($nome == "João")):
    echo "É verdadeiro";
else:
    echo "É falso";
endif;
echo "<hr>";

//ou exclusivo (xor). Retorna o "É verdadeiro", se umas das 2 opções forem verdadeiras, se caso as 2 forem verdadeiras retorna "É falso".
if(($idade == 25) xor ($nome == "João")):
    echo "É verdadeiro";
else:
    echo "É falso";
endif;
echo "<hr>";

//negação (!), causa negação, no exemplo abaixo, realmente $idade não é 26, fazendo com que seja verdadeira a situação. Mas caso fosse o valor real 25, iria anular a veracidade tornando-a falsa.
if(!($idade == 26) and ($nome == "João")):
    echo "É verdadeiro";
else:
    echo "É falso";
endif;
echo "<hr>";