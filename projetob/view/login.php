<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/formulario.css">
    <link rel="stylesheet" type="text/css" href="../css/login.cs">
    <link rel="shortcut icon" type="imagex/png" href="../img/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login - Memória Digital</title>

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
                        <a href="/projetob/view/login.php">Login</a>
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
                        <h1>Cadastro de Usuário</h1>
                        <form action="../model/cadusuario.php" method="POST">
                            
                            <div class="container_form__itens">
        
                                <div class="container_form_itens__inputs">
                                    
                                    <div class="container_form_input">
                                        <label>Nome:</label><br/>
                                        <input type="text" name="cxnome" required>
                                    </div>
        
                                    <div class="container_form_input">
                                        <label>E-mail:</label> <br/>
                                        <input type="e-mail" name="cxemail" required>
                                    </div>
        
                                    <div class="container_form_input">
                                        <label>Senha:</label> <br/>
                                        <input type="password" name="cxsenha" required>    
                                    </div> 
        
                                </div>
        
                                <div class="container_form_itens__submit">    
                                    <input type="submit" value="Cadastrar">
                                </div>
        
                            </div>
        
                        </form>
                        <p>Já tem cadastro? 
                            <a href="/projetob/view/login.php?action=login">Logue-se</a> 
                        </p>
                    </div>
                </div>
            
                <div class="container_login" id="login">
                    <div class="container_form-login">
                        <img class="figura_icon" src="../img/pfp.png" alt="">        
                        <h1>Acesso ao sistema</h1>
                        <form action="../model/open.php" method="POST">
                            
                            <div class="container_form__itens">
        
                                <div class="container_form_itens__inputs">
                                    
                                    <div class="container_form_input">
                                        <label>Usuário:</label><br/>
                                        <input type="text" name="cxuser" class="cxuser">
                                    </div>
        
                                    <div class="container_form_input">
                                        <label>E-mail:</label> <br/>
                                        <input type="e-mail" name="cxemail">
                                    </div>
        
                                    <div class="container_form_input">
                                        <label>Senha:</label> <br/>
                                        <input type="password" name="cxsenha" class="cxsenha">  
                                    </div> 
        
                                </div>
        
                                <div class="container_form_itens__submit">    
                                    <input type="submit" value="Acessar">
                                </div>
        
                            </div>
        
                        </form>
                        <p>Ainda não tem cadastro? 
                            <a href="/projetob/view/login.php?action=cadastro">Registre-se</a> 
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

    <script src="../js/hide.js"></script>
</body>
</html>