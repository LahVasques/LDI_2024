<?php
    include_once "animal.php";
    class Cao extends Animal{
        public $nome;
        public $raca;
        public $pelo;
        public $cor;
        function exibirCao(){
            echo "<h1> Meu Cão </h1>";
            echo "Nome: " . $this->nome = "Marx"  . "<br/>";
            echo "Raça: " . $this->raca="Pastor Alemão" . "<br/>";
            echo "Pelo: " . $this->pelo="Médio" . "<br/>";
            echo "Cor: " . $this->cor="Preto" . "<br/>";
            echo "Tutor: " . $this->tutor . "<br/>";
            echo "Endereço: " . $this->endereco . "<br/>";
        }
    }

?>
