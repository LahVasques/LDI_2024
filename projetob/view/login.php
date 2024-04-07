<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/formulario.css">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <title>Login - </title>
</head>
<body>
    
    <header>
        <div class="menu">
            <div class="menu_nav">
                
                <div class="menu_nav-left">
                    <img src="../img/pfp.png" alt="">
                </div>

                <div class="menu_nav-right">
                    <div class="menu_nav__link">
                        <a href="/projetob/view/index.php">Home</a>
                    </div>
                    <div class="menu_nav__link">
                        <a href="/projetob/view/login.php">Login</a>
                    </div>

                    <div class="menu_img">
                        <img src="../img/pfp.png" alt="">
                    </div>
                </div>
                
            </div>
        </div>
    </header>

    <main>
            <div id="cxprincipal">
                <figure id="cxfigura">
                        <img class="figura_icon" src="../img/pfp.png" alt="">        
                </figure>
                <div id="cxmenu">
                    <h1>Acesso ao Sistema</h1>
                    <form action="" method="POST">
                        
                        <div class="container_form__itens">
    
                            <div class="container_form_itens__inputs">
                                
                                <div class="container_form_input">
                                    <label>Email:</label><br/>
                                    <input type="email" name="cxemail" class="cxemail">
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
                </div>
            </div>
    </main>
    
    <footer>
        <div class="footer-content">
            <h3>Nome do Site</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque aliquam nisi harum natus veniam quod asperiores soluta fugit iste et excepturi cum, reiciendis aut fugiat reprehenderit. Aliquid itaque nulla sequi?</p>
            <ul class="socials">
                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-github"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2024 LaissVasques</p>
        </div>
    </footer>
</body>
</html>