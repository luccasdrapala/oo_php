<?php

    //modelo 
    class Funcionario{//padrão camel case

        //atributos
        public $nome = 'José';
        public $tel = '47 9999-9999';
        public $numeroFilhos = 2;

        //metodos
        function resumirCadfunc() {
            $resumo = 'Nome: ' . $this->nome . "<br>Telefone: " . $this->tel . "<br>Numero de filhos: " . $this->numeroFilhos; 
            return $resumo;
        }

        function modNumFi($novoFilho) {
            //modifica a variavel $numeroFilhos
            $this->numeroFilhos = $novoFilho;
        }
    }

    $obj = new Funcionario();

    //token '->' serve para referenciar o objeto (como se fosse o '.' do .js)
    echo $obj -> resumirCadFunc();
    $obj -> modNumFi(666);
    echo '<hr>';
    echo $obj -> resumirCadFunc();

?>