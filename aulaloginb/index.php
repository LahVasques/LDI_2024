<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login e senha</title>
</head>
<body>
    <h1>Acessando o sistema</h1>
    <form action="control/login/open.php" method="POST">
        E-mail:<br/>
        <input type="email" name="cxemail"/><br/>
        Senha:<br/>
        <input type="password" name="cxsenha"/><br/>
        Perfil:<br/>
        <input type="checkbox" name="cxprofessor" /><br/>
        <input type="submit" value="Entrar"/>
    </form>
</body>
</html>