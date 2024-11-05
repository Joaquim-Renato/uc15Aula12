<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Envio</title>
</head>
<body>
    <h1 align=center> Confirmação De Envio</h1>

    <?php

    // Sintaxe de conexão com Banco de Dados
    $conexao = new mysqli("localhost", "root", "", "formulario");

    // Verifica se os dados foram enviados pelo form
    if (isset($_POST['campoNome']).($_POST['campoEmail']).($_POST['campoComentario']));
    {

        //Limpe e valide os dados
        $campoNome = mysqli_real_escape_string($conexao,$_POST['campoNome']);
        $campoEmail = mysqli_real_escape_string($conexao,$_POST['campoEmail']);
        $campoComentario = mysqli_real_escape_string($conexao,$_POST['campoComentario']);

        // Insira os dados no banco de dados 
        $query = "INSERT INTO dados (nome, email, comentario) VALUES ('$campoNome','$campoEmail', '$campoComentario')";

        mysqli_query($conexao, $query);
    }

        //$nome= $_POST['nome'];
        echo "<center> <p> Obrigado <b> $campoNome!! </b><br><br> Seu comentário foi enviado com Sucesso!! </p> </br></center>";

    ?>

<div style="text-align: center;"> <a href="/index.html"> Voltar</a> </div>

</body>
</html>