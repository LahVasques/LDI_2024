<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" type="imagex/png" href="../img/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Menu - Memória Digital</title>
    
    <?php
        SESSION_START();
        if ((!isset($_SESSION["email"])==true) 
        && (!isset($_SESSION["senha"])==true)) 
        {
            header("location:login.php?action=login");
        };
    ?>

</head>

<body>
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
                    <a href="../model/exit.php">Sair</a>
                </div>

                <div class="menu_img">
                    <img src="../img/menu.png" alt="">
                </div>
            </div>

        </div>
    </div>
    <header id="header_index">
        <div>
            <img src="../img/banner.png" alt="">
        </div>
    </header>

    <div id="cxprincipal">

        <div class="linha-1">

            <div id="cxamigo">
                <img src="../img/amigo-cad.png">
                <div class="consulta_link">
                    <a href="/projetob/view/telacadamigo.php?action=cadastro">
                        Cadastre seu Amigo
                        <i class="fa-solid fa-circle-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div id="cxcomercio">
                <img src="../img/empresa-cad.png">
                <div class="consulta_link">
                    <a href="/projetob/view/telacadcomercio.php?action=cadastro">
                        Cadastre sua Empresa
                        <i class="fa-solid fa-circle-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div id="cxusuario">
                <img src="../img/user-cad.png">
                <div class="consulta_link">
                    <a href="/projetob/view/telacaduser.php?action=cadastro">
                        Cadastre seu Usuário
                        <i class="fa-solid fa-circle-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>

        <div class="linha-2">

            <div id="cxconsultaamigo">
                <img src="../img/amigo-busca.png">
                <div class="consulta_link">
                    <a href="/projetob/view/telacadamigo.php?action=buscar">
                        Buscar seu Amigo
                        <i class="fa-solid fa-circle-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div id="cxconsultacomercio">
                <img src="../img/empresa-busca.png">
                <div class="consulta_link">
                    <a href="/projetob/view/telacadcomercio.php?action=buscar">
                        Busque sua Empresa
                        <i class="fa-solid fa-circle-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div id="cxconsultauser">
                <img src="../img/user-busca.png">
                <div class="consulta_link">
                    <a href="/projetob/view/telacaduser.php?action=buscar">
                        Busque seu Usuário
                        <i class="fa-solid fa-circle-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>


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