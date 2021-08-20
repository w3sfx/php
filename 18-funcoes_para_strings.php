<?php
//Funções para Strings

//Transforma em letras maiúsculas.
$nome = "wesley victor";
$novoNome = strtoupper($nome);
echo $novoNome;

echo "<hr>";

//Transforma em letras minúsculas.
$nome = "WESLEY VICTOR";
$novoNome = strtolower($nome);
echo $novoNome;

echo "<hr>";

//Retorna uma parte da string, a partir da escolha inicial, e se dejável, pode indicar o seu fim também.
$mensagem = "Olá mundo";
echo substr($mensagem, 4, 5);

echo "<hr>";

//Complementa uma outra string com uma determinada quantidade de caracteres, podendo escolher o caractere, e o lado em questão.
$objeto = "mouse";
$novoObjeto = str_pad($objeto, 11, "*", STR_PAD_BOTH);
echo $novoObjeto;

echo "<hr>";

//Serve para repetir uma string.

$string = str_repeat("Sucesso! <br>", 5);
echo $string;

echo "<hr>";

//Serve para retornar o comprimento de uma string.

$mensagem = "Olá mundo";
echo strlen($mensagem);

echo "<hr>";

//Serve para substituir uma palavra em um texto.

$texto = "A seleção Argentina será campeã da copa do mundo de 2018.";
$novoTexto = str_replace("Argentina", "Brasileira", $texto);
echo $novoTexto;

echo "<hr>";

//Serve para retornar a posição de uma palavra no texto.

echo strpos($texto, "copa");
