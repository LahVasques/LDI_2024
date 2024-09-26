<?php
include_once "pai.php";
    # extends tudo que o pai tem o filho tbm herda
    class Filho extends Pai{
        public $curso = "Ads";
        function exibir(){
            echo "Nome: " . $this->nome . "<br/>";
            echo "Idade: " . $this->idade . "<br/>";
            echo "Curso:    " . $this->curso . "<br/>";
        }
    };
?>