<?php
    include_once "../factory/conexao.php";

    session_start();

    $email = $_POST["inp-email"];
    $senha = $_POST["inp-senha"];
        
    $sql = "select grupo from usuarios where email = '$email'";
    $resultado = mysqli_query($caminho,$sql);
    $linha = mysqli_fetch_assoc($resultado);
    
    if(mysqli_num_rows($resultado)>0){
        $grupo = $linha['grupo'];
        $_SESSION['login'] = $email;
        $_SESSION['senha'] = $senha;

        if($grupo == '3') {

            header('location:../view/aluno.php');

        }
        else if ($grupo == '2'){

            header('location:../view/professor.php');

        }else if ($grupo == '1'){

            header('location:../view/diretor.php');

        }

    }else{
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        echo "E-mail ou senha errado!";
    }
    
?>