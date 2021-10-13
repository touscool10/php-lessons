<?php
    $_gasolina = 5.999999999;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // arredondar para média 
            echo round($_gasolina) . "</br>" . "</br>";
            // arredondar para cima 
            echo ceil($_gasolina) . "</br>" . "</br>";
            // arredondar para baixo 
            echo floor($_gasolina) . "</br>" . "</br>";
        ?>
        
        
    </body>
</html>