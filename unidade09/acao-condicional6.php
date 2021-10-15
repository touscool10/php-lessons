<?php
     $_dia = "segunda";
     //$_dia = "terça";
     //$_dia = "quarta";
     //$_dia = "quinta";
     //$_dia = "sexta";
     //$_dia = "sábado";
     //$_dia = "domingo";
     $_sexo = "feminino";
     //$_sexo = "masculino";
     $_idade = 38;

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
            if ($_dia == "segunda" || $_dia == "terça" 
                || $_dia == "quarta" || $_dia == "quinta"
                || $_dia == "sexta") {
                echo "É ".$_dia. ", um dia de semana."
                ."</br>"."</br>";
            }
            else {
                echo "É ".$_dia. ", final de semana."
                ."</br>"."</br>";
            }

            if ($_sexo == "feminino" && $_idade >= 18) {
                echo "Pode participar da festa, é menor."
                ."</br>"."</br>";
            }
            else {
                echo "Não pode participar da festa."
                ."</br>"."</br>";
            }
        ?>
    </body>
</html>