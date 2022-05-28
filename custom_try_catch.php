<?php

    class MinhaExceptionCustomizada extends Exception {

        private $erro = '';

        public function __construct($erro) {
            $this->erro = $erro;
        } 

        public function exibirErroCustom () {
            return $this->erro;
        }
    }

    try {

        throw new MinhaExceptionCustomizada('Erro de teste');

    } catch (MinhaExceptionCustomizada $e) {
        
        echo $e->exibirErroCustom();
    } 

?>