<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro</title>
</head>
<body>
    <?php
        include_once "../revisaob/factory/conexao.php";
    ?>

    <label for=""> HOME | História | Contatos - Perfil:</label>
    <hr>
    <h1>Cadastrar Produto</h1>
        <a href="view\produtos\cadastrar.php"> Cadastrar </a> | 
        <a href="view\produtos\telapesquisa.php">Consultar</a> | 
        Alterar | 
        Excluir 

        <h1>Cadastrar Amigo</h1>
        <a href="view\amigos\cadastrar.php"> Cadastrar </a> | 
        <a href="view\amigos\telapesquisa.php">Consultar</a> | 
        Alterar | 
        Excluir 

</body>
</html>