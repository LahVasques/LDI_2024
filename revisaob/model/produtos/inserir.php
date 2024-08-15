<?php

if($_POST["inpnome"]  != "") {
        include_once "../../factory/conexao.php";
        $nome = $_POST["inpnome"];
        $desc = $_POST["inpdesc"];
        $preco = $_POST["inppreco"];
        $inserir = "insert into produtos(nome, descricao,valor)values('$nome','$desc','$preco')";
        $executar = mysqli_query($conn,$inserir);
        echo "
        <script>
            alert('Cadastrado com sucesso!');
            window.location.href='../../index.php';
        </script>
        ";
    } else {
        echo "Dados não cadastrados";
    };


?>