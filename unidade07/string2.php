<?php 
    $_nome = "Curso PHP Fundamental RRRRR";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <?php 
            // strlen - Retorna a quantidade de letras
            echo strlen($_nome); echo " ------- ";
            
            // stripos  - Retorna primeira ocorrência 
            echo stripos($_nome,"C") ; echo " ------- ";

            // strripos - Retorna última ocorrência
            echo strripos($_nome,"s") ; echo " ------- ";
            
            // strtolower - converte para letras min.
            echo strtolower($_nome); echo " ------- ";

            // strtoupper - converte para letras min.
            echo strtoupper($_nome); echo " ------- ";

            // SUBSTR_COUNT - Conta quantas ocorreram
            // de um texto ou string -- Faz diferença Maiusculas e minusculas
            echo substr_count($_nome,"a"); echo " ------- ";
            echo substr_count($_nome,"R"); echo " ------- ";
            
        ?>

        
        
    </body>
</html>