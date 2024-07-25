<?php
    include_once '../factory/conexao.php';

    $id = $_GET["id"];
    $excluir = "delete from tbamigo where codigo = '$id'";
    $executar = mysqli_query($conn, $excluir);
    if ($executar) {
        echo "Amigo excluído com sucesso!";
        echo "<br/>";
        echo "<a href='../view/index.php'>Voltar</a>";
    } else {
        echo "Erro de dados, ao excluir amigo";
    };
?>