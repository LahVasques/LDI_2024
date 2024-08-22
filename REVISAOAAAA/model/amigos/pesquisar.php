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
        $pesquisa = $_POST["inppesquisa"];
        $consulta = "select * from amigos where nome ='$pesquisa' ";
        $executar= mysqli_query($conn, $consulta);
        $linha = mysqli_fetch_array($executar); 


    if ($linha==true) {
    ?>
    <form action="" method="post">
        <label for="">Nome:</label>
        <input type="text" value="<?php echo $linha['nome']?>"/><br/>
        
        <label for="">Apelido:</label>
        <input type="text"value="<?php echo $linha['apelido']?>"/><br/>
        
        <label for="">Preço:</label>
        <input type="text"value="<?php echo $linha['email']?>"/><br/>

    </form>
    <?php
    } else {
        echo "
            <script>
                alert('Dados não encontrados!');
                window.location.href='../../index.php';
            </script>
        ";
    };
    ?>
    <a href="../../index.php">Menu</a>
</body>
</html>