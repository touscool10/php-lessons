<?php
    $_fumante = true;
    $_NaoFumante = false;

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <?php
            echo " Vanessa é fumante? " . " " . $_fumante . "</br>". "</br>";
            echo " Crespin é fumante? " . " " . $_NaoFumante . "</br>". "</br>";
            echo " É boleana? " . " " . is_bool($_NaoFumante) . "</br>". "</br>";
 
        ?>

    </body>
</html>