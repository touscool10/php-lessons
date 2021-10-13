<?php
    $_salada = array("maçã","abacaxi","laranja");
?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            
            echo $_salada[0]."</br>"."</br>";
            echo $_salada[1]."</br>"."</br>";
            echo $_salada[2]."</br>"."</br>";
            $_salada[] = "abacate";
            echo $_salada[3]."</br>"."</br>";
            echo count($_salada); echo "</br>"."</br>";
            $_salada[] = null;
            echo $_salada[4]."</br>"."</br>";
            echo $_salada[3]."</br>"."</br>";
        ?>

        <?php
            print_r($_salada);
            echo "</br>"."</br>";
        ?>

        <pre>
            <?php
                print_r($_salada);
                echo "</br>"."</br>";
            ?>
        </pre>


    </body>
</html>