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
        $consulta = "select * from produtos where nome ='$pesquisa' ";
        $executar= mysqli_query($conn, $consulta);
        $linha = mysqli_fetch_array($executar); 


    if ($linha==true) {
    ?>
    <form action="../produtos/editar.php?id=<?php echo $linha['id'] ?>" method = "post">
        <label for="">Produto:</label>
        <input type="text" name="inpnome" value="<?php echo $linha['nome']?>" /><br/>
        
        <label for="">Fabricante:</label>
        <input type="text" name = "inpdesc" value="<?php echo $linha['descricao']?>"/><br/>
        
        <label for="">Valor:</label>
        <input type="text" name = "inppreco" value="<?php echo $linha['preco']?>" name = "inppreco"/><br/>

    </form>
        <button><a href="/model/produtos/excluir.php">Salvar edição</a></button>
        <button type="submit">Salvar</button>
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