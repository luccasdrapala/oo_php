<?php

    try {

        echo '<h3>   Try   </h3>';

        //$sql = 'select * from clientes';
        //mysql_query($sql);
        if (!file_exists('require_arquivo_a.php')) {
            throw new error("o arquivo não existe");
        }

    } catch (error $erro) {
        echo '<h3>   catch error  </h3>';
        echo '<br> Erro: ' . $erro;

    } catch (Exception $exception) {
        echo '<h3>   catch exception  </h3>';
        echo '<br> Erro: ' . $exception;

    } finally {

        echo '<h3>   Finaly   </h3>';
    }

?>