<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espírito Santo</title>
    <?php include_once "control/filho.php" ?>
</head>
<body>
    <?php
        $dados = new Filho;
        $dados->exibir();
    ?>
</body>
</html>