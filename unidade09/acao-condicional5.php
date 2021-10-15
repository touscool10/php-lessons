<?php
        $_n1 = 3*4;
        $_n2 = array(12);
        //$_n2 = "12";
        
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>

    <body>
        <pre>
        <?php 
            if ($_n1 == $_n2){
                echo "são iguais, ie. mesmo valor"."</br>"."</br>";
            }       
            else {
                echo "não são iguais em valor"."</br>"."</br>";
            } 
            
            if ($_n1 === $_n2){
                echo "são iguais em valor e do mesmo tipo"."</br>"."</br>";
            }       
            else {
                echo "são diferentes"."</br>"."</br>";
            } 

            print_r($_n2); echo "</br>"."</br>";
        ?>
        </pre>

    </body>
</html>