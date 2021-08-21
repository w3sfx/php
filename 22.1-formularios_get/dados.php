<?php
//Usando o método GET.
//Os dados ficam expostos na URL.

//$nome = $_GET['nome'];
//$email = $_GET['email'];

//echo "Seu nome é $nome e seu email é $email.<hr>";

var_dump($_GET);
echo "<hr>";

echo $_GET['idade']."<br>".$_GET['sobrenome'];
