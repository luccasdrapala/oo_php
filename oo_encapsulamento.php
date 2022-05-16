<?php

    class Pai {

        private $nome = 'Luccas';
        protected $sobrenome = 'Drapala';
        public $status = 'ativo'; //publico

        /*
        //getters e setters overloading funcionam de forma automatica
        public function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        public function __get($atributo) {
            return $this->$atributo;
        }
        */

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

        public function getAtributo($attr) {
            return $this->$attr;
        }

        public function setAtributo($attr, $value){
            $this->$attr = $value;
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

    echo $filho->getAtributo('sobrenome<br>');
    $filho->setAtributo('sobrenome','carlsagan');
    echo $filho->getAtributo('sobrenome<br>');

?>