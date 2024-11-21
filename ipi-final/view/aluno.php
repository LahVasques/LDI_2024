<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluno</title>

    <?php
        SESSION_START();
        if ((!isset($_SESSION["login"])==true) 
        && (!isset($_SESSION["senha"])==true)) 
        {
            header("location:index.php");
        }
    ?>

</head>
<body>
    <p>ALUNO</p>
</body>
</html>