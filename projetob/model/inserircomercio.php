<?php
    if ($_POST["cxempresa"] != "") {
        include_once "../factory/conexao.php";

        $empresa = $_POST["cxempresa"];
        $email = $_POST["cxemail"];
        $contato = $_POST["cxcontato"];
        $tel = $_POST["cxtel"];
        
        $sql = "insert into tbcomercio(empresa,email,contato,tel)
        values ('$empresa','$email','$contato','$tel')";
        $query = mysqli_query($conn,$sql);
        echo "Dados cadastrados com sucesso!";
    } else {
        echo "Dados não cadastrados";
    }
    
?>