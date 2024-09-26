<?php
    include_once "animal.php";
    class Gato extends Animal{
        public $nome;    
        public $raca;
        public $pelo;
        public $cor;
        function exibirGato(){
            echo "<h1> Meu Gato </h1>";
            echo "Nome: " . $this->nome="Fifi" . "<br/>";
            echo "Raça: " . $this->raca="Cinza Inglês" . "<br/>";
            echo "Pelo: " . $this->pelo="Curto" . "<br/>";
            echo "Cor: " . $this->cor="Cinza" . "<br/>";
            echo "Tutor: " . $this->tutor . "<br/>";
            echo "Endereço: " . $this->endereco . "<br/>";
        }
    }
?>
