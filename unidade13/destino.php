<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body> 
        <?php
            $salada = array("imagens/laranja.jpg","imagens/maca.jpg","imagens/abacate.jpg");
            $code = $_GET["parameter"] ;
            //echo $code;
            //echo $salada[$code];
            //echo "Oi";
        ?>

        <img src="<?php echo $salada[$code]  ?>"/>

        

        
    </body>
</html>