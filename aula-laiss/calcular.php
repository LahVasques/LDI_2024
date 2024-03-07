<?php
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$nome = $_POST['nome'];

$imc = $peso / ( $altura * $altura );

echo "Nome:".$nome;
echo "IMC: ".$imc;

if($imc < 17){
    echo "Abaixo do Peso";
}else if(18.5 <= $imc && $imc <= 24.9){
    echo "Peso Normal";
}else if(25 <= $imc && $imc <= 29.9){
    echo "Sobrepeso";
}else if(30 <= $imc && $imc <= 34.9){
    echo "Obesidade Grau I";
}else if(35 <= $imc && $imc <= 39.9){
    echo "Obesidade Grau II";
}else if(40 <= $imc){
    echo "Obesidade Grau III";
}

?>