<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/aluno.css">
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
    <div class="main-container">
        <div class="title-container">
            <p>ALUNO</p>
        </div>
    </div>
</body>
</html>