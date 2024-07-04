<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/formulario.css">
    <link rel="shortcut icon" type="imagex/png" href="../img/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Cadastro de Amigo</title>
</head>

<body>
<header>
        <div class="menu">
            <div class="menu_nav">

                <div class="menu_nav-left">
                    <img src="../img/logo.png" alt="">
                </div>

                <div class="menu_nav-right">
                    <div class="menu_nav__link">
                        <a href="/projetob/view/index.php">Home</a>
                    </div>
                    <div class="menu_nav__link">
                        <a href='/projetob/view/login.php'>Sair</a>
                    </div>

                    <div class="menu_img">
                        <img src="../img/menu.png" alt="">
                    </div>
                </div>

            </div>
        </div>
    </header>

    <main>

        <div class="container">
            <div class="container_cad" id="cadastro">
                <div class="container_form-cad">
                    <h1>Cadastro de Amigo</h1>
                    
                    <form action="../model/inseriramigo.php" method="POST">
        
                        <div class="container_form__itens">
        
                            <div class="container_form_itens__inputs">
        
                                <div class="container_form_input">
                                    <span>Nome:</span> <br />
                                    <input type="text" name="cxnome" required>
                                </div>
        
                                <div class="container_form_input">
                                    <span>E-mail:</span> <br />
                                    <input type="e-mail" name="cxemail" required>
                                </div>
        
                                <div class="container_form_input">
                                    <span>Data de Nascimento:</span> <br />
                                    <input type="date" name="cxdatanasc"required >
                                </div>
        
                                <div class="container_form_input">
                                    <span>Número de Telefone:</span> <br />
                                    <input type="text" name="cxtel" required>
                                </div>
        
                            </div>
        
                            <div class="container_form_itens__submit">
                                <input type="submit" value="Gravar">
                            </div>
        
                        </div>
        
                    </form>
                    <p>Já cadastrou esse amigo? 
                        <a href="/projetob/view/telacadamigo.php?action=buscar">Busque-o</a> 
                    </p>
                </div>
            </div>
    
            <div class="container_busca" id="buscar">
                <div class="container_form-busca">
                    <h1>Buscar</h1>
                    <form action="../model/consultaamigonome.php" method="POST">
                        <div class="container_form__itens">
                            <div class="container_form_itens__inputs">
                                <label for="">Digite o nome completo do amigo:</label>
                                <input type="text" name="cxpesquisa" id="" />
                            </div>
    
                            <div class="container_form_itens__submit">
                                <input type="submit" value="Pesquisar" />
                            </div>
                        </div>
                    </form>
                    <p>Ainda não cadastrou esse amigo? 
                        <a href="/projetob/view/telacadamigo.php?action=cadastro">Cadastre-o</a> 
                    </p>
    
                </div>
            </div>
        </div>
        
    </main>
    
    <footer>
        <div class="footer-content">
            <h1>Memória Digital</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque aliquam nisi harum natus veniam quod
                asperiores soluta fugit iste et excepturi cum, reiciendis aut fugiat reprehenderit. Aliquid itaque nulla
                sequi?</p>
            <ul class="socials">
                <li><a href="https://www.youtube.com/channel/UCisG_5k4OYLFn8Gdonpn5eQ"><i class="fa-brands fa-youtube"></i></a></li>
                <li><a href="https://www.linkedin.com/in/laiss-vasques/"><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href="https://github.com/LahVasques"><i class="fa-brands fa-github"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2024 LaissVasques</p>
        </div>
    </footer>

    <script src="../js/hide.js"> </script>
</body>
</html>