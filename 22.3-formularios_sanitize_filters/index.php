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
if(isset($_POST['enviar_formulario'])):

    // ARRAY DE ERROS

    $erros = array();

    // Sanitize - Sanitização

    //Serve para escapar códigos html, caso o usuário queira inserir.
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    
    //Serve para filtrar números inteiros.
    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    if(!filter_var($idade, FILTER_VALIDATE_INT)):
        $erros[] = "Idade precisa ser um inteiro";
    endif;

    //Serve para filtrar emails, tirando caracteres...
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
        $erros[] = "Email Inválido";
    endif;

    //Serve para filtrar urls, tirando caracteres...
    $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
    if(!filter_var($url, FILTER_VALIDATE_URL)):
        $erros[] = "URL Inválida";
    endif;


    // EXIBINDO MENSAGENS

    if(!empty($erros)): //Se a variável não estiver vazia.
        foreach($erros as $erro):
            echo "<li> $erro </li>";
        endforeach;
    else: 
        echo "Parabéns, seus dados estão corretos!";
    endif;


endif;

?>

   
<!--O action vai retornar os dados no próprio index, sem necessidade de arquivo externo-->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Nome: <input type="text" name="nome"><br>
    Idade: <input type="text" name="idade"><br>
    Email: <input type="text" name="email"><br>
    URL: <input type="text" name="url"><br>
    <abbr title="Enviar Formulário"><button type="submit" name="enviar_formulario">Enviar</button></abbr> 
</form>

</body>
</html>