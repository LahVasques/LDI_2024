<?php
    include_once "../../factory/conexao.php";

    session_start();
    $perfilaluno = "select *from tbuser where perfil='aluno'";
    $perfilprofessor = "select *from tbuser where perfil='professor'";
    $email = $_POST["cxemail"];
    $senha = $_POST["cxsenha"];
    $sql = "select *from tbuser where
    email = '$email' and senha = '$senha' ";

    $resultado = mysqli_query($caminho,$sql);
    if(mysqli_num_rows($resultado)>0){

        $_SESSION['login'] = $email;
        $_SESSION['senha'] = $senha;
        if($sql === $perfilaluno){

            header('location:../../view/menualuno.php');

        }
        else if ($sql === $perfilprofessor ){
            header('location:../../view/menuprofessor.php');
        }

    }else{
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        echo "E-mail ou senha errado!";
    }
    
?>