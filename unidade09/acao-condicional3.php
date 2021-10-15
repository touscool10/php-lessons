<?php
    //$_idade = 15;
    $_idade = 17;
    //$_idade = 20;

?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>

    <body>

        <?php 
            $_maioridade = ($_idade > 17)? " é de maior"."</br>"."</br>" : " é de menor"."</br>"."</br>" ;
            echo $_idade."</br>"."</br>";
            echo $_maioridade;
        ?> 

    </body>

</html>