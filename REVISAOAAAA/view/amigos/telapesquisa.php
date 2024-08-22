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
        include_once "../../factory/conexao.php";
    ?>

<div class="forms">
        <form action="../../model/amigos/pesquisar.php" method="POST">

            <div class="form_itens">
                <label for="">Nome do amigo</label>
                <input type="text" name="inppesquisa">
            </div>

            <div class="form_submit">
                <button type="submit">Pesquisar</button>
            </div>
        </form>
    </div>
</body>
</html>