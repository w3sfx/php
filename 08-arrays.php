<?php
// Arrays numéricos

// Se inserir um número maior e quebrar a sequencia do indice, ele irá continuar em ordem crescente após o número inserido.
$carros = array("BMW", 1=>"Veloster", "Hilux");
print_r($carros);
echo "<hr>";
echo $carros[0];
echo "<hr>";
echo $carros[1];
echo "<hr>";
// Posso indicar o número do indice desejado.
$carros[3] = "Amarok";
print_r($carros);
echo "<hr>";

$motos = array();
$motos[5] = "Yamaha";
$motos[2] = "Honda";
$motos[] = "XJ";
print_r($motos);
echo "<hr>";

$clientes = ["Rodrigo", "Fernanda", "Carlos"];
print_r($clientes);
echo "<hr>";

//Count
echo count($motos);
$total_motos = count($motos);
echo "<hr>";
echo 'O total de motos é de '.$total_motos.'.';
echo "<hr>";

// Foreach
foreach($carros as $valor) {
    echo $valor."<br>";
    var_dump($valor);
    echo "<hr>";
}
echo "<hr>";

// Arrays associativos
$pessoa = array("nome"=> "Rodrigo", "idade"=> 23, "altura"=> 1.75);
print_r($pessoa);
echo "<hr>";
echo $pessoa["idade"];
$pessoa["cidade"] = "Sapé";
echo "<hr>";
print_r($pessoa);
echo "<hr>";

foreach($pessoa as $indice => $valor) {
    echo $indice.":".$valor."<br>";
}
echo "<hr>";

// Arrays multidimensionais
$times = array("cariocas"=> array("vasco", "flamengo", "botafogo"), "paulistas"=> array("campeao"=>"Corinthians","vice"=>"São Paulo","terceiro"=>"Santos"), "baianos" => array("bahia", "vitoria", "itabuna"));
print_r($times);
echo "<hr>";
echo $times["paulistas"]["campeao"];
echo "<hr>";

foreach($times["paulistas"] as $indice => $valor) {
    echo $indice.":".$valor."<br>";
}