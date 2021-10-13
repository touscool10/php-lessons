<?php
    $_megasena = array(47,29,42,04,27,21);
    //sort($_megasena);
    rsort($_megasena);
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>

        <?php
            echo max($_megasena)."<br>"."<br>";
            echo min($_megasena)."<br>"."<br>";
        ?>

        <pre>
        <?php 
            print_r($_megasena);
            echo "<br>"."<br>";
            print_r(array_values($_megasena));
        ?>
        </pre>
    </body>
</html>