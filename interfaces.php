<?php

    /*
    interface equipamentoInterface {

        public function ligar();
        public function desligar();
    }

    class Freez implements equipamentoInterface {
        
        public function abrirPorta() {
            echo 'Abri a porta';
        }

        public function ligar() {
            echo 'liguei';
        }
        
        public function desligar() {
            echo 'desliguei';
        }
    } 

    class TV implements equipamentoInterface {

        public function trocarCanal() {
            echo 'Troquei de canal';
        }

        public function ligar() {
            echo 'liguei';
        }
        
        public function desligar() {
            echo 'desliguei';
        }
    }
    */

    interface MamiferoInterface {
        public function respirar();
    }

    interface TerrestreInterface {
        public function andar();
    }

    interface AquaticoInterface {
        public function nadar();
    }

    class Human implements MamiferoInterface, TerrestreInterface {

        public function respirar() {
            echo 'Respirar';  
        }

        public function andar() {
            echo 'Andar';
        }
        
    }

    class Px implements MamiferoInterface, AquaticoInterface {

        public function respirar() {
            echo 'Respirar';
        }

        public function nadar() {
            echo 'Nadar';
        }
        
    }

    $x = new Px();

    $x->nadar();

?>
