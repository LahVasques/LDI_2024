<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/caduser.css">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <form action="inseriruser.php" method="POST">
        <span>Nome:</span>
        <input type="text" name="cxnome">
        <br/>
        <span>E-mail:</span>
        <input type="e-mail" name="cxemail">
        <br/>    
        <span>Senha:</span>
        <input type="password" name="cxsenha">
        <br/>    
        <input type="submit" value="gravar">
    </form>
</body>
</html>