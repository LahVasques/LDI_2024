<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/form.css">
    <link rel="stylesheet" type="text/css" href="../css/consultar.css">
    <title>Cadastro de Amigo</title>
</head>
<body>

        <div class="container_cad">
            <div class="container_form-cad">
                <h1>Cadastro de Amigo</h1>
                <form action="../model/inseriramigo.php" method = "POST">

                    <div class="container_form__itens">

                        <div class="container_form_itens__inputs">

                            <div class="container_form_itens__input-1">
                                <span>Nome:</span> <br/>
                                <input type="text" name="cxnome">    
                            </div> 

                            <div class="container_form_itens__input-2">                        
                                <span>E-mail:</span> <br/>
                                <input type="e-mail" name="cxemail">
                            </div>

                            <div class="container_form_itens__input-3">                        
                                <span>Data de Nascimento:</span> <br/>
                                <input type="date" name="cxdatanasc">
                            </div>

                            <div class="container_form_itens__input-4">                        
                                <span>Número de Telefone:</span> <br/>
                                <input type="text" name="cxtel">
                            </div>

                        </div>
                        
                        <div class="container_form_itens__submit">    
                            <input type="submit" value="Gravar">
                        </div>
                        
                    </div>

                </form>
            </div>

            <hr size="10" width="50%" color="#00000"/>

            <div class="container_busca">
                <div class="container_form-busca">
                    <h1>Buscar</h1>
                    <form action="../model/consultaamigonome.php" method="POST">
                        <div class="container_form__itens">
                            <div class="container_form_itens__inputs">
                                <label for="">Digite o nome completo do amigo:</label>
                                <input type="text" name="cxpesquisa" id=""/>        
                            </div>
                                
                            <div class="container_form_itens__submit">
                                <input type="submit" value="Pesquisar"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>