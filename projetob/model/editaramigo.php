<?php
    include_once "../factory/conexao.php";
    //se der certo 

    // $_POST["cxnome"];
    
    // $nome = $_POST["cxnome"];
    // $email = $_POST["cxemail"];
    // $datanasc = $_POST["cxdatanasc"];
    // $tel = $_POST["cxtel"];

    
    $editar = "UPDATE tbamigos SET nome = $nome, email = $email, datanasc = $datanasc, tel = $tel WHERE email = $email";
    $executar = mysqli_query($conn, $editar);

    if($executar){
        echo "Dados Alterados com sucesso";
    } else {
        echo "Erro ao alterar dados";
    };

    header("location:consultaamigonome.php");
?>