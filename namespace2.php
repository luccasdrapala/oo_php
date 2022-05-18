<?php

    require './bibliotecas/lib1/lib1.php';
    require './bibliotecas/lib2/lib2.php';

    use A\Cliente as Cliente_lib1; 
    use B\Cliente as Cliente_lib2;

    $c = new Cliente_lib2();
    print_r($c);
    echo $c->__get('nome');

?>