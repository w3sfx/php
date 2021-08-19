<?php
// Funções completas na documentação

$nomes = array("Primo"=>"Wesley","Vizinho"=>"José","Pai"=>"Victor","Mãe"=>"Ana");

echo is_array($nomes);
echo "<hr>";

if (is_array($nomes)):
    echo "É um array";
else:
    echo "Não é um array";
endif;
echo "<hr>";

// Verifica se o valor existe no array
echo in_array("Wesley", $nomes);
echo "<hr>";
if (in_array("Carlos", $nomes)):
    echo "Existe no array";
else:
    echo "Não existe no array";
endif;
echo "<hr>";

//Adiciona os indices do array escolhido, nos valores do array atual.
$keys = array_keys($nomes);
print_r($keys);
echo "<hr>";

//Adiciona os valores do array escolhido para o array atual.
$values = array_values($nomes);
print_r($values);
echo "<hr>";

//Faz a junção de arrays em um único escolhido.

$carros = ["Camaro", "Uno", "Gol"];
$motos = array("Pop100", "50cc", "cb1000");
$veiculos = array_merge($carros, $motos);
print_r($veiculos);
echo "<hr>";

//Exclui/Extrai a última posição do array.
print_r($carros);
echo "<hr>";
echo array_pop($carros); // Quando se coloca o "echo" ele mostra qual valor do array foi excluido/extraido.
echo "<hr>";
print_r($carros);
echo "<hr>";
$carros[] = "Gol";

//Exclui/Extrai a primeira posição do array.
print_r($carros);
echo "<hr>";
echo array_shift($carros); // Quando se coloca o "echo" ele mostra qual valor do array foi excluido/extraido.
echo "<hr>";
print_r($carros);
echo "<hr>";

//Adiciona elementos no inicio do array.
$frutas = array("Uva", "Laranja", "Limão");
array_unshift($frutas, "Manga", "Acerola", "Morango");
echo "<hr>";
print_r($frutas);
echo "<hr>";

//Adiciona elementos no final do array.
$frutas = array("Uva", "Laranja", "Limão");
array_push($frutas, "Manga", "Acerola", "Morango");
echo "<hr>";
print_r($frutas);
echo "<hr>";

//Podemos mesclar dois arrays, sendo um o indice e outro o valor.
$keys = array("Campeão", "Vice", "Terceiro");
$values = array("Corinthians", "São Paulo", "Vasco");
$times = array_combine($keys, $values);
print_r($times);
echo "<hr>";

//Calcula a soma do array.
$soma = [5, 6, 10, 8.7];
$total = array_sum($soma);
echo array_sum($soma);
echo "<hr>";
echo $total;
echo "<hr>";

//Transforma uma string em um array, 1ª opção do explode é para selecionar o delimitador, onde irá apagá-lo, separando cada parte em um indice.
$data = "30/02/2018";
$nova_data = explode('/', $data);
print_r($nova_data);
echo "<hr>";
$frase = "Meu nome não é Johnny";
$array = explode(' ', $frase);
print_r($array);
echo "<hr>";

//Transforma um array em uma string, 1ª opção do implode é para selecionar o divisor.
$nomes = array("Wesley", "Rodrigo", "Matheus", "Thalita");
print_r($nomes);
echo "<hr>";
$string = implode(", ", $nomes);
print_r($string);
echo "<hr>";
