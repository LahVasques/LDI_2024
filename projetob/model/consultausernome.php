<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once "../factory/conexao.php";
        $nome = $_POST["cxpesquisa"];
        $consultar = "select * from tbusuario where nome = '$nome'";
        $executar = mysqli_query($conn, $consultar);

        $linha = mysqli_fetch_array($executar);
    ?>
    <label for="">Nome:</label>
    <input type="text" name="" value="<?php echo $linha ['nome'] ?>"/>

    <label for="">E-mail:</label>
    <input type="text" name="" value="<?php echo $linha ['email'] ?>"/>

    <label for="">Senha:</label>
    <input type="password" name="" value="<?php echo $linha ['senha'] ?>"/>
</body>
</html>