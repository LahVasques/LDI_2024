<?php

if($_POST["inpnome"]  != "") {
        include_once "../../factory/conexao.php";
        $nome = $_POST["inpnome"];
        $apelido = $_POST["inpapelido"];
        $email = $_POST["inpemail"];
        $inserir = "insert into amigos(nome, apelido,email)values('$nome','$apelido','$email')";
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