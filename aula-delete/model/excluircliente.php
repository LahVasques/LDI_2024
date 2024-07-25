<?php
    include_once '../factory/conexao.php';

    $id = $_GET["id"];
    $excluir = "delete from tbcliente where codigo = '$id'";
    $executar = mysqli_query($conn, $excluir);
    if ($executar) {
        echo "Cliente cadastrado com sucesso!";
        echo "<br/>";
        echo "<a href='../view/index.php'>Voltar</a>";
    } else {
        echo "Erro de dados, ao excluir cliente";
    };
?>