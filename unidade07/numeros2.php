<?php
    $_salario = 1095;
    $_gasolina = 4.55;
    $_telefone = "(48)" . " " . "99125-2887";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // testar se é numérica? 
            echo "$_salario é um número ? ". " " . is_numeric($_salario) ."</br>" . "</br>";
            echo "$_gasolina é um número ? ". " " . is_numeric($_gasolina) ."</br>" . "</br>";
            echo "$_telefone é um número ? ". " " . is_numeric($_telefone) ."</br>" . "</br>"; 
            
            // testar se é inteiro
            echo "$_salario é um número inteiro ? ". " " . is_int($_salario) ."</br>" . "</br>";
            echo "$_gasolina é um número inteiro ? ". " " . is_int($_gasolina) ."</br>" . "</br>";
            echo "$_telefone é um número inteiro ? ". " " . is_int($_telefone) ."</br>" . "</br>"; 

            // testar se é float
            echo "$_salario é um número racional ? ". " " . is_float($_salario) ."</br>" . "</br>";
            echo "$_gasolina é um número racional ? ". " " . is_float($_gasolina) ."</br>" . "</br>";
            echo "$_telefone é um número racional ? ". " " . is_float($_telefone) ."</br>" . "</br>"; 
            
        ?>
        
        
    </body>
</html>