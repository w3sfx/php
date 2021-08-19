<?php
// Constantes // Elas são globais
define("NOME", "Wesley Victor");
define("IDADE", 18);
define("ALTURA", 1.80);
define("CASADO", false);

define("TIMES", ['CORINTHIANS', 'VASCO', 'SÃO PAULO']);

echo NOME;
echo "<hr>";
var_dump(ALTURA);
echo "<hr>";
echo 'Meu nome é '.NOME.', e minha idade é '.IDADE.' tenho '.ALTURA.' de altura.';
echo "<hr>";
echo TIMES[0];
echo "<hr>";
var_dump(TIMES);
echo "<hr>";

function exibenome() {
    echo NOME;
}

exibenome();