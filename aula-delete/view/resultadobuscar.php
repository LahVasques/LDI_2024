<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados - Busca</title>
</head>
<body>
    <?php
        include_once '../factory/conexao.php';

        $nome =  $_POST["cxbuscar"];
        $buscar = "select * from tbcliente where nome = '$nome' ";
        $executar = mysqli_query($conn, $buscar);
        $linha = mysqli_fetch_array($executar);
    ?>

    <label>Nome:</label>
    <input type="text" value="<?php echo $linha["nome"] ?>"> <br/>

    <label>Email:</label>
    <input type="text" value="<?php echo $linha["email"] ?>"> <br/>

    <a href="../model/excluircliente.php?id=<?php echo $linha["codigo"] ?>">
        <label>Excluir</label>
    </a>

</body>
</html>