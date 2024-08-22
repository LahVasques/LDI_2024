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
        include_once "../../factory/conexao.php";

        $consulta = "select * from produtos ";
        $executar= mysqli_query($conn, $consulta);
        while($linha = mysqli_fetch_array($executar)){        
    ?>
    <form action="" method="post">
        <label for="">Nome:</label>
        <input type="text" value="<?php echo $linha['nome']?>"/><br/>
        
        <label for="">Descrição:</label>
        <input type="text"value="<?php echo $linha['descricao']?>"/><br/>
        
        <label for="">Preço:</label>
        <input type="text"value="<?php echo $linha['preco']?>"/><br/>

    </form>
    <?php }; ?>

    <a href="../../index.php">Menu</a>
</body>
</html>