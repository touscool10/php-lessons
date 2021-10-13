<?php
    $_nome = null;
    $_nomes = true;
    $_nomess = false;


?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
        echo "É nulo?" . " " . is_null($_nome) . "</br>". "</br>";
        echo "É nulo?" . " " . is_null($_nomes) . "</br>". "</br>";
        echo "Nome = " . $_nome . "</br>". "</br>";
        echo "Nome = " . $_nomes . "</br>". "</br>";
        echo "Nome = " . $_nomess . "</br>". "</br>";
        ?>
    </body>
</html>