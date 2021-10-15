<?php
    //$_fumante = true;
    $_fumante = false;
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
            if (!$_fumante){
                echo "Você não é fumante"."</br>"."</br>";
            }
            else {
                echo "Você é fumante"."</br>"."</br>";
            }
        ?>

<?php 
            if ($_fumante != true){
                echo "Você não é fumante"."</br>"."</br>";
            }
            else {
                echo "Você é fumante"."</br>"."</br>";
            }
        ?>

    </body>
</html>