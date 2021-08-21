<?php
//Superglobais
/*
    $GLOBALS
    $_SERVER
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_REQUEST
    $_COOKIE
    $_SESSION
*/

$x = 10;
$y = 15;

//Torna as variáveis globais dentro da função.
function soma() {
    echo $GLOBALS['x'] + $GLOBALS['y'];
}

soma();

echo "<hr>";

//array que contém vários indices, retornando os valores desejados.
echo $_SERVER['PHP_SELF']."<hr>";
echo $_SERVER['SERVER_NAME']."<hr>";
echo $_SERVER['SCRIPT_FILENAME']."<hr>";
echo $_SERVER['DOCUMENT_ROOT']."<hr>";
echo $_SERVER['SERVER_PORT']."<hr>";
echo $_SERVER['REMOTE_ADDR']."<hr>";
echo $_SERVER['REMOTE_PORT']."<hr>";

