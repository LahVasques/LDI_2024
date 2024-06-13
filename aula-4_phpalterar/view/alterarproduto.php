<?php
    include_once "factory/conexao.php";
    $codigo = $_POST["cxcodigo"];
    $produto = $_POST["cxproduto"];
    $marca = $_POST["cxmarca"];
    
    $alterar = "UPDATE tbproduto SET produto = '$produto', marca = '$marca' where codigo = '$codigo'";

    $executar = mysqli_query($conn,$alterar);
    if($executar){
        echo "Dados Alterados com sucesso";
    } else {
        echo "Erro ao alterar dados";
    };
?>

<a href="telaconsutanomeproduto.php">Voltar</a>