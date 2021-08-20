<?php

for ($contador = 0 ;$contador <= 10; $contador++):
    echo "8 x $contador = ".(8*$contador);
    echo "<br>";
endfor;

echo "<hr>";

//foreach é usado para arrays.
$cores = ["Verde", "Vermelho", "Azul"];

foreach($cores as $valor):
    echo $valor."<br>";
endforeach;

echo "<hr>";

foreach($cores as $indice => $valor):
    echo $indice.":".$valor."<br>";
endforeach;