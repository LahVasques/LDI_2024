<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Empresa</title>
</head>
<body>
    <form action="inserircomercio.php" method = "POST">
        <span>Empresa:</span>
        <input type="text" name="cxempresa">
        <br/>
        <span>E-mail:</span>
        <input type="e-mail" name="cxemail">
        <br/>
        <span>Contato:</span>
        <input type="text" name="cxcontato">
        <br/>
        <span>Número de Telefone:</span>
        <input type="text" name="cxtel">
        <br/>

        <input type="submit" valeu="Gravar">
    </form>
</body>
</html>