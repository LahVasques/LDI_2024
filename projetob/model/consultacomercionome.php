<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/inserir.css">
    <link rel="shortcut icon" type="imagex/png" href="../img/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Resultados da busca - Empresa</title>
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
                        <a href="../model/exit.php">Sair</a>
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
            <div class="container_processo">

                <?php
                    include_once "../factory/conexao.php";

                    if(isset($_POST["cxpesquisa"])) {
                        $nome = $_POST["cxpesquisa"];
                        $consultar = "SELECT * FROM tbcomercio WHERE empresa = '$nome'";
                        $executar = mysqli_query($conn, $consultar);

                        if(mysqli_num_rows($executar) > 0) {
                            $linha = mysqli_fetch_array($executar);

                            echo '<h1>Empresas Encontradas</h1>';
                ?>

                <form action="../model/editarcomercio.php?cod=<?php echo $linha['cod']?>" method="post">

                    <div class="container_itens">

                        <div class="container_input">
                            <span for="">Nome:</span> <br/>
                            <input type="text" name="cxempresa" value="<?php echo $linha ['empresa'] ?>"/>
                        </div>
                        <div class="container_input">
                            <span for="">E-mail:</span>  <br/>
                            <input type="text" name="cxemail" value="<?php echo $linha['email'] ?>"/>
                        </div>
                        <div class="container_input">
                            <span for="">Contato:</span>  <br/>
                            <input type="text" name="cxcontato" value="<?php echo $linha ['contato'] ?>" />
                        </div>
                        <div class="container_input">
                            <span for="">Telefone:</span>  <br/>
                            <input type="text" name="cxtel" value="<?php echo $linha ['tel'] ?>" />
                        </div>

                        <div class="container_button">
                            <button type="submit">Salvar
                            </button>
                        </div>
                            
                        <div class="container_button">
                            <a href="../model/excluircomercio.php?cod=<?php echo $linha['cod']?>">
                                <button type="button">Excluir
                                </button>
                            </a>
                        </div>
                    </div>

                </form>
                <?php
                        } else {
                            echo '<h1>Dados não encontrados</h1>';
                            echo '<a href="/projetob/view/telacadcomercio.php?action=buscar"><button>Voltar</button></a>';
                        }
                    }
                ?>
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

</body>
</html>