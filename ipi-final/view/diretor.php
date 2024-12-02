<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/diretor.css">
    <title>DIRETOR</title>

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
    <main>
        <div class="main-container">
            <div class="title-container">
                <p>Diretor</p>
            </div>
            <div class="link-container">
                <a href="aluno.php">Tela aluno</a>
                <a href="professor.php">Tela Professor</a>
            </div>
        </div>
    </main>
</body>
</html>