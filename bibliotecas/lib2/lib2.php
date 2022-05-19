<?php

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

?>