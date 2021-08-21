<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    
<!--action informa o script que irá armazená-lo, method indica o método-->
<form action="dados.php" method="POST">
    Nome: <input type="text" name="nome"><br>
    Email: <input type="email" name="email"><br>
    <abbr title="Enviar Formulário"><button type="submit">Enviar</button></abbr> <!--Podemos usar também o <input type="submit" name="enviar">, porém irá armazenar dentro do $_POST-->
</form>

</body>
</html>