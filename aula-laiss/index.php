<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Calculadora IMC</title>
</head>
<body>
    <main>
        <div id="forms">
            <form method="post" action="calcular.php">
                <label> Nome: </label> </br>
                <input type="text" name="nome"> <br/>

                <label> Peso: </label> </br>
                <input type="number" name="peso"> <br/>

                <label> Altura: </label> </br>
                <input type="number" name="altura"> <br/> 
                
                <button id="submit" type="submit" value="Calcular IMC">
            </form>        
        </div>        
    </main>
</body>
</html>