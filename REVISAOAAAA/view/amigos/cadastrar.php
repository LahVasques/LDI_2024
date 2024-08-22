<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Amigos</title>
</head>

<body>
    <?php
        include_once "../../factory/conexao.php";
        
    ?>

    
    <div class="forms">
        <form action="../../model/amigos/inserir.php" method="POST">

            <div class="form_itens">
                <label for="">Nome:</label>
                <input type="text" name="inpnome" id="">
            </div>
            <div class="form_itens">
                <label for="">Apelido:</label>
                <input type="text" name="inpapelido" id="">
            </div>
            <div class="form_itens">
                <label for="">email:</label>
                <input type="text" name="inpemail" id="">
            </div>
            <div class="form_submit">
                <button type="submit">Cadastrar</button>
            </div>
        </form>
    </div>

</body>

</html>