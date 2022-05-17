<?php

    class Exe {
        public static $attr1 = 'Atributo estático';//não fica disponicel com $objeto->
        public $attr2 = 'Atributo normal';
        
        public static function metodo1() {//não fica disponivel com operador $this
            echo 'método estatico';
        }

        public function metodo2() {
            echo 'metodo normal';
        } 
    }

    $x = new Exe();

    echo Exe::$attr1;
    echo '<br>';
    Exe::metodo1();

?>