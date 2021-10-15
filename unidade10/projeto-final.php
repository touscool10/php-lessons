<?php
        
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php   
            $_megasena = array();
            $_counter = 1; 

            while ($_counter < 7) {
                $_draw = rand(1,60);
                if (!in_array($_draw,$_megasena)) {
                    $_megasena[] = $_draw;
                    $_counter++;
                }     
            }

            sort($_megasena);
        ?>

        <pre>
        <?php
            print_r($_megasena)."</br>"."</br>";     
        ?>
        </pre>
        
    </body>
</html> 

