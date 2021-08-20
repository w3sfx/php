<?php
//Funções para números

//Serve para formatar preços, inserindo a "," para os decimais, e o "." para os milhares.
$db = 1234.56;
$preco = number_format($db, 2, ",", ".");
echo "O valor do produto é R$ $preco.";

echo "<hr>";

//Serve para arredondar valores.
echo round(3.6);
echo "<br>";
echo round(3.4);

echo "<hr>";

//Serve para arrendondar valores para mais.
echo ceil(1.32);

echo "<hr>";

//Serve para arrendondar valores para menos.
echo floor(5.99);

echo "<hr>";

//Serve para fazer sorteio.
echo rand(1, 20);