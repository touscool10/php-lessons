<?php
    $_salada = array("Laranja","Uva","Abacate");
    $_salada[] = "Laranja";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <!-- <pre> -->
        <?php 
            echo "Existe o elemento ? ".in_array("Laranja",$_salada)."<br>"."<br>";
            echo "Existe ". count($_salada). " elementos no array"."<br>"."<br>";
            echo "Existe o elemento (Laranja) na posição ".array_search("Laranja",$_salada)."<br>"."<br>";
            echo "Existe ".substr_count($_salada[0],"a"). " ocorrências no string da posição 0 do array"."<br>"."<br>";
            echo array_search("Laranja",$_salada);
        ?>
        <!-- </pre> -->

    </body>
</html>