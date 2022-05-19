<?php

    namespace A;
    class Cliente implements CadastroInterface {

        public $nome = 'José';

        public function __construct() {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function __get($attr) {
            return $this->$attr;
        }

        public function salvar() {
            echo 'Salvar';
        }
    }

    interface CadastroInterface {
        public function salvar();
    }
    /*
    $obj = new Cliente();
    print_r($obj);
    echo $obj->__get('nome');
    echo '<hr>';
    */
    //-------------Divisão namespaces-------------

    namespace B;
    class Cliente implements CadastroInterface {

        public $nome = 'Carlos';

        public function __construct() {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function __get($attr) {
            return $this->$attr;
        }

        public function Remover() {
            echo 'Remover';
        }
    }

    interface CadastroInterface {
        public function remover();
    }

    $obj = new \A\Cliente();

    print_r($obj);
    echo $obj->__get('nome');

?>