<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Amigo</title>
</head>
<body>
    <form action="inseriramigo.php" method = "POST">
        <span>Nome:</span>
        <input type="text" name="cxnome">
        <br/>
        <span>E-mail</span>
        <input type="e-mail" name="cxemail">
        <br/>
        <span>Data de Nascimento</span>
        <input type="date" name="cxdatanasc">
        <br/>
        <span>Número de Telefone</span>
        <input type="text" name="cxtel">
        <br/>

        <input type="submit" valeu="Gravar">
    </form>
</body>
</html>