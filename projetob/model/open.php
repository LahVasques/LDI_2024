<?php
    include_once "../factory/conexao.php";
    SESSION_START();

    $email = $_POST["cxemail"];
    $senha = $_POST["cxsenha"];
    $sql = "select * from tbusuario WHERE email = '$email' and senha = '$senha'";
    $result =  mysqli_query($conn,$sql);

    // if ($sql == true) {
    //     $user = "select * from tbusuario WHERE email = '$email' ";
    // };
    
    if (mysqli_num_rows($result) > 0) {
    
        $_SESSION["email"] = $email;
        $_SESSION["senha"] = $senha;
        header('location:../view/index.php'); 
    
    } else {
    
        echo "Dados incorretos";
        unset($_SESSION["email"]);
        unset($_SESSION["senha"]);

    };
    

?>