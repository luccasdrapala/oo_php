<?php

    class Carro extends Veiculo{

        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }
        
        //public $placa = 'XXX-XXX';
        //public $cor = 'Branco';
        public $teto_solar = true;
        
        /*function acelerar() {
            echo 'Acelera';
        }*/

        function abreTeto() {
            echo 'Abre teto';
        }

        function posicaoVolante() {
            echo 'Altera posição volante';
        }
    }

    class Moto extends Veiculo{

        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        //public $placa = 'YYY-YYY';
        //public $cor = 'Preta';
        public $contraPesoGuidao = true;

        /*
        function acelerar() {
            echo 'Acelera';
        }*/

        function empinar() {
            echo 'empinar';
        }

        function trocarMarcha() {
            echo 'Troquein a marcha da motoooo';
        }
    }

    class Veiculo {

        public $placa = null;
        public $cor = null;

        function acelerar() {
            echo 'Acelerar';
        }

        function trocarMarcha() {
            echo 'Troquein a marcha';
        }
    }
    
    
    $carro = new Carro('ABC-1234', 'Preto');
    $moto = new Moto('YYY-YYY', 'Branco');

    echo '<pre>';
    print_r($carro);
    echo '<br>';
    print_r($moto);
    echo '</pre>';
    echo '<hr>';
    echo $carro->trocarMarcha();
    echo '<br>';
    echo $moto->trocarMarcha();
    
?>
