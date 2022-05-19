<?php

    //modelo 
    class Funcionario{//padrão camel case

        //atributos
        public $nome = null;
        public $tel = null;
        public $numeroFilhos = null;
        public $cargo = null;
        public $salario = null;

        //getters setters (overloading / sobrecargar)
        function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        function __get($atributo) {
            return $this->$atributo;
        }

        /*
        //getters e setters
        function setNome($nome) {
            $this->nome = $nome;    
        }

        function setNumFilhos($numFilhos) {
            $this->numeroFilhos = $numFilhos;    
        }

        function setTel($tel) {
            $this->tel = $tel;    
        }

        function getNome() {
            return $$this->nome;
        }

        function getNumFIlhos() {
            return $$this->numeroFilhos;
        }

        function getTel() {
            return $this->tel;
        }
        */

        //metodos
        function resumirCadfunc() {
            $resumo = $this->__get('nome') . ' | ' . $this->__get('tel') . ' | ' . $this->__get('numeroFilhos'); 
            return $resumo;
        }

        function modNumFi($novoFilho) {
            //modifica a variavel $numeroFilhos
            $this->numeroFilhos = $novoFilho;
        }
    }

    $obj = new Funcionario();

    $obj->__set('nome', 'Satan');
    $obj->__set('tel', '666-666' );
    $obj->__set('numeroFilhos', '6');
    
    echo $obj->resumirCadfunc();

    echo "<hr>";

    $jesus = new Funcionario();
    $jesus->__set('nome', 'Jesus');
    $jesus->__set('tel', '000-000' );
    $jesus->__set('numeroFilhos', '200.000.000');

    echo $jesus->resumirCadfunc();
    

?>