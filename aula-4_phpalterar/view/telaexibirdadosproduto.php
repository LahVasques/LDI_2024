<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once "factory/conexao.php";
        $pesquisa = $_POST["cxpesquisaproduto"];
        $consulta = "select * from tbproduto where produto = '$pesquisa'";
        $executar = mysqli_query($conn,$consulta);
        $linha = mysqli_fetch_array($executar);

        if($linha==true){
    ?>
        <form action="alterarproduto.php" method="POST">
            <div class="container_form__itens">
                
                <div class="container_form_itens__inputs">
    
                    <div class="container_form_input">
                        <span>Código:</span> <br />
                        <input type="text" name="cxcodigo" value="<?php echo $linha["codigo"] ?>" required>
                    </div>
    
                    <div class="container_form_input">
                        <span>Produto:</span> <br />
                        <input type="text" name="cxproduto" value="<?php echo $linha["produto"]?>" required>
                    </div>
    
                    <div class="container_form_input">
                        <span>Marca:</span> <br />
                        <input type="text" name="cxmarca" value="<?php echo $linha["marca"] ?>" required>
                    </div>
    
                </div>
    
                <div class="container_form_itens__submit">
                    <input type="submit" value="Alterar">
                </div>
    
            </div>
        </form>
    <?php
        }else{
            echo "produto não encontrado";
        }
    ?>
    
    
</body>
</html>
