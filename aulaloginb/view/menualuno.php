<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Aluno</title>
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
            background-color: blue;
        }
    </style>
</head>
<body>
    <h1>Menu Aluno</h1>
    HOME | Notas| Perfil: Aluno | Sair
</body>
</html>