<?php
    $_a = 100; $_b = 100;
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
                       
            if ($_a > $_b) {
                echo "A é maior do que B."."</br>"."</br>";
            }
            elseif ($_a < $_b) {
                echo "A é menor do que B."."</br>"."</br>";
            }
            else {
                echo "A é igual a B."."</br>"."</br>";
            }   

        ?>
    </body>
</html>