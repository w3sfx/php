<?php
// ESCOPO GLOBAL
$nome = "Wesley Victor";
$a = 1;
$b = 4;
$c = 9;

function exibenome() {
    // ESCOPO LOCAL
    global $nome;
    echo $nome;
}

exibenome();
echo "<hr>";
////////////////

function exibecidade() {
    // ESCOPO LOCAL
    global $cidade;
    $cidade = "Rio de Janeiro";
}

exibecidade();
echo $cidade;
echo "<hr>";
//////////////////

function soma() {
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();