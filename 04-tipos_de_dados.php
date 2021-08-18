<?php
// string
$nome = "Olá, mundo";
var_dump($nome);
if(is_string($nome)):
    echo "É uma string";
else:
    echo "Não é uma string";
endif;
echo "<hr>";

// int
$idade = 18;
var_dump($idade);
echo "<hr>";

// float
$altura = 1.75;
var_dump($altura);
if(is_float($altura)):
    echo "É um float";
else:
    echo "Não é um float";
endif;
echo "<hr>";

// bool
$admin = false;
var_dump($admin);
echo "<hr>";

/*********** Compostos *********/
// array
$carros = array("Gol", "Uno", "Camaro",12,20.6, True);
var_dump($carros);
if(is_array($carros)):
    echo "É um array";
else:
    echo "Não é um array";
endif;
echo "<hr>";

// object
class Cliente {
    public $nome;
    public function atribuirNome($nome) {
        $this->$nome = $nome;
    }
}

$cliente = new Cliente();
$cliente->atribuirNome("Wesley");
var_dump($cliente);
if(is_object($cliente)):
    echo "É um objeto";
else:
    echo "Não é um objeto";
endif;
echo "<hr>";

//ESPECIAIS

// NULL
$cidade = NULL;
var_dump($cidade);

// Resource
?>