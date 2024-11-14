<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Professor</title>
    <?php
    session_start();
    if(
        (!isset($_SESSION['login']) == true)
        and
        (!isset($_SESSION['senha']) == true)
    )  {
        header('location:../index.php');
    }

    ?>
        <style>
        body{
            background-color: red;
        }
    </style>
</head>
<body>
    <h1>Perfil do Professor</h1>
    HOME | Turmas | Perfil: Professor | Sair
</body>
</html>