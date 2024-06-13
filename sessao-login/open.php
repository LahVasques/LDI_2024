<?php
    include_once "factory/conexao.php";
    SESSION_START();

    $email = $_POST["cxlogin"];
    $senha = $_POST["cxsenha"];
    $sql = "select * from tbusuario WHERE email = '$email' and senha = '$senha'";
    $result =  mysqli_query($conn,$sql);
    
    if (mysqli_num_rows($result) > 0) {
    
        $_SESSION["login"] = $email;
        $_SESSION["senha"] = $senha;
        header('location:menu.php');
    
    } else {
    
        echo "Dados incorretos";
        unset($_SESSION["login"]);
        unset($_SESSION["senha"]);

    }
    

?>