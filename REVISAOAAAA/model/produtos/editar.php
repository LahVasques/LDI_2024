
<?php
    include_once "../../factory/conexao.php";
    $id = $_GET['id'];

    $nome = $_POST['inpnome'];
    $desc = $_POST['inpdesc'];
    $preco = $_POST['inppreco'];

    $alterar = "UPDATE produtos set nome = '$nome', desc = '$desc', preco = '$preco' WHERE id = '$id'";
    $exercutar = mysqli_query($conn, $alterar);
    mysqli_fetch_array($executar);

?>
