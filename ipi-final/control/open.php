<?php
    include_once "../factory/conexao.php";

    session_start();

    $email = $_POST["inp-email"];
    $senha = $_POST["inp-senha"];
   
    $sql = "select * from usuarios where email = '$email' and senha = '$senha' ";
    
    
    $paluno = "select * from usuarios where email = '$email' and grupo = '3'";
    $pprofessor = "select * from usuarios where email = '$email' and grupo = '2'";
    $pdiretor = "select * from usuarios where email = '$email' and grupo = '1'";

    $executar = mysqli_query($caminho,$sql);

    $resultado = mysqli_query($caminho,$sql);

    if(mysqli_num_rows($resultado)>0){

        $_SESSION['login'] = $email;
        $_SESSION['senha'] = $senha;
        if($sql === $paluno){

            header('location:../view/aluno.php');

        }
        else if ($sql === $pprofessor){

            header('location:../view/professor.php');

        }else if ($sql === $pdiretor){

            header('location:../view/diretor.php');

        }

    }else{
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        echo "E-mail ou senha errado!";
    }
    
?>