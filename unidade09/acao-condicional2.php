<?php
    $_dia = "segunda";
    //$_dia = "terça";
    //$_dia = "quarta";
    //$_dia = "quinta";
    $_dia = "sexta";
    //$_dia = "sábado";
   // $_dia = "Domingo";
    
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
            switch ($_dia) {
                case strtolower($_dia) == "segunda" :
                    echo strtolower($_dia)." ---";
                    echo " Hoje é Segunda-feira"."</br>"."</br>";
                    break;
                case strtolower($_dia) == "terça" :
                    echo strtolower($_dia)." ---";
                    echo " Hoje é Terça-feira"."</br>"."</br>";
                    break;
                case strtolower($_dia) == "quarta" :
                    echo strtolower($_dia)." ---";
                    echo " Hoje é Quarta-feira"."</br>"."</br>";
                    break;
                case strtolower($_dia) == "quinta" :
                    echo strtolower($_dia)." ---";
                    echo " Hoje é Quinta-feira"."</br>"."</br>";
                    break;
                case strtolower($_dia) == "sexta" :
                    echo strtolower($_dia)." ---";
                    echo " Hoje é Sexta-feira"."</br>"."</br>";
                    break;
               // case strtolower($_dia) == "sábado" :
                   // echo strtolower($_dia)." ---";
                  //  echo " Hoje é Sábado"."</br>"."</br>";
                   // break;
                //case strtolower($_dia) == "domingo" :
                   // echo strtolower($_dia)." ---";
                   // echo " Hoje é Domingo"."</br>"."</br>";
                   // break;
                default:
                    echo " É final de semana!!"."</br>"."</br>"; 
                    break;   
            }
        ?>
    </body>
</html>