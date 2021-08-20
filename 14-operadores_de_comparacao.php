<?php
//Operadores de Comparação

//Igual =
if(10 == "10"):
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

//Não igual !=
if(10 != 11):
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

//Identidade ===, irá informar se é idêntico, levando em consideração o tipo também.

if(10 === "10"):
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

//Não idêntico !===.
if(10 !== "10"):
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

//Diferente.
if(10 <> 10):
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

//Menor que.
if(10 < 15):
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

//Maior que.
if(10 > 15):
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

//Menor igual.
if(10 <= 10):
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

//Maior igual.
if(10 >= 15):
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

//Spaceship.
var_dump(20 <=> 25); //Se o lado esquerdo for menor, retornará -1, se for igual, retornará 0, se o lado direito for menor, retornará 1. 
