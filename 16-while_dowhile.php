<?php
//While & Do While

$contador = 1;

//Temos a escrita alternativa, podemos usar ":" - endwhile; respectivamente, ou "{}".
//Nessa condição, ele primeiro verifica e depois executa o código.
while ($contador <= 10){
    echo "Contador é $contador";
    echo "<br>";
    $contador++;
}

echo "<hr>";
$contador = 1;

//Nessa condição, ele primeiro executa o código, e depois verifica a condição.
do {
    echo "Contador é $contador <br>";
    $contador++;
} while ($contador <= -1);