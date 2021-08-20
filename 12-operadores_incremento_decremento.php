<?php
//Servem para somar ou subtrair (+1 ou -1).

$valor = 20;

//Pré-incremento
echo ++$valor;
echo "<hr>";

$valor = 20; //Resetando variável.
//Pós-incremento
echo $valor++;//Primeiramente retorna.
echo "<hr>";
echo $valor;//Depois incrementa.
echo "<hr>";

$valor = 20; //Resetando variável.
//Pré-decremento
echo --$valor;
echo "<hr>";

$valor = 20; //Resetando variável.
//Pós-decremento
echo $valor--;//Primeiramente retorna.
echo "<hr>";
echo $valor;//Depois decrementa.
echo "<hr>";