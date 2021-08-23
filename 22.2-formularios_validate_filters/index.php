<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>

<!--Quando se trabalha com códigos misturados, se especifica as tags de abertura e fechamento-->
<?php
//Verificando no método post, se existe o 'enviar_formulario' com isset.
if(isset($_POST['enviar_formulario'])):
    echo "Enviou! <br>";
    var_dump($_POST);
    echo "<hr>";
endif;

if(isset($_POST['enviar_formulario'])):
    $idade = $_POST['idade'];
    echo $idade;
endif;
echo "<hr>";

$idade = ''; //Declarando a variável vazia.
if(isset($_POST['enviar_formulario'])):
    if($idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
        echo "É um inteiro";
    endif;
endif;
echo "<hr>";

$idade = ''; //Declarando a variável vazia.
if(isset($_POST['enviar_formulario'])):

    // ARRAY DE ERROS

    $erros = array();

    // VALIDAÇÕES

    //Função filter_input.

    if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)): //Fazendo uso da negação "!".
        //Armazenando a informação no array erros.
        $erros[] = "Idade precisa ser um inteiro";
    endif;

    echo "<hr>";

    if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
        //Armazenando a informação no array erros.
        $erros[] = "Email inválido";
    endif;

    echo "<hr>";

    if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
        //Armazenando a informação no array erros.
        $erros[] = "Peso precisa ser um float";
    endif;

    echo "<hr>";

    if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
        //Armazenando a informação no array erros.
        $erros[] = "IP Inválido";
    endif;

    echo "<hr>";

    if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
        //Armazenando a informação no array erros.
        $erros[] = "URL Inválida";
    endif;

    echo "<hr>";

    // EXIBINDO MENSAGENS

    if(!empty($erros)): //Se a variável não estiver vazia.
        foreach($erros as $erro):
            echo "<li> $erro </li>";
        endforeach;
    else: 
        echo "Parabéns, seus dados estão corretos!";
    endif;


endif;
echo "<hr>";
?>

   
<!--O action vai retornar os dados no próprio index, sem necessidade de arquivo externo-->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Idade: <input type="text" name="idade"><br>
    Email: <input type="text" name="email"><br>
    Peso: <input type="text" name="peso"><br>
    IP: <input type="text" name="ip"><br>
    URL: <input type="text" name="url"><br>
    <abbr title="Enviar Formulário"><button type="submit" name="enviar_formulario">Enviar</button></abbr> 
</form>

</body>
</html>