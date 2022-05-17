<?php

    class Pai {

        private $nome = 'Luccas';
        protected $sobrenome = 'Drapala';
        public $status = 'ativo'; //publico

        //getters e setters overloading funcionam de forma automatica
        public function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        public function __get($atributo) {
            return $this->$atributo;
        }
        

        private function acao() {
            echo 'acao private';
        }

        protected function responder() {
            echo 'protected responde';
        }

        public function executaAcoes() {
            $this->acao();
            echo '<br>';
            $this->responder();
        }
    }

    class Filho extends Pai {

        public function __construct() {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        } 
    }
 
    /*
    $obj = new Pai();
    echo $obj->__get('sobrenome');
    echo '<hr>';
    $obj->__set('nome', 'Satnatas');
    $obj->__set('sobrenome', 'Lalu');
   
    echo '<pre>';
    print_r($obj);
    echo '</pre><hr>';

    $obj->sobrenome = 'Jesus';//set funciona automaticamente, sem necessidade de chamar a funcao diretamente
   
    echo '<pre>';
    print_r($obj);
    echo '</pre><hr>';

    echo $obj->executaAcoes();
    echo '<hr>';
    */

    $filho = new Filho();

    echo '<pre>';
    print_r($filho);
    echo '</pre><hr>';

    /*
    $filho->setAtributo('nome','carlsagan');
    echo $filho->getAtributo('nome');
    echo '<hr>';
    */

    echo '<pre>';
    print_r(get_class_methods($filho));
    echo '</pre><hr>';

    $filho->executaAcoes();

?>