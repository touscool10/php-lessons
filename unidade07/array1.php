<?php
    $_tutifruti = array("maçã","banana","manga","acerola");
    $_carrinho = array(76,"João", array(1,"Bolsa",79.90));
    
    

?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            
            $_tutifruti[] = "caquí";
            $_tutifruti[] = "kiwi";
            $_carrinho[] = "eu quero";
            $_carrinho[] = "é muito barato";
            $_carrinho[2][3] = "vai pegar?";


            echo $_tutifruti[0]."</br>"."</br>";
            echo $_tutifruti[1]."</br>"."</br>";
            echo $_tutifruti[2]."</br>"."</br>";
            echo $_tutifruti[3]."</br>"."</br>";
            echo $_tutifruti[4]."</br>"."</br>";
            echo $_tutifruti[5]."</br>"."</br>";
            echo $_tutifruti[6]."</br>"."</br>";

            echo $_carrinho[0]."</br>"."</br>";
            echo $_carrinho[1]."</br>"."</br>";
            echo $_carrinho[2]."</br>"."</br>";
            echo $_carrinho[2][0]."</br>"."</br>";
            echo $_carrinho[2][1]."</br>"."</br>";
            echo $_carrinho[2][2]."</br>"."</br>";
            echo $_carrinho[2][3]."</br>"."</br>";
            echo $_carrinho[3]."</br>"."</br>"; echo "---";
            echo $_carrinho[4]."</br>"."</br>";

        ?>
    </body>
</html>