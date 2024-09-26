<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais de Estimação</title>
    <?php include_once "control/cao.php" ?>
    
    <?php include_once "control/gato.php" ?>
</head>
<body>
    <?php
        $dadoscao = new Cao;
        $dadoscao->exibirCao();

        $dadosgato = new Gato;
        $dadosgato->exibirGato();
    ?>
</body>
</html>