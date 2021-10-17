<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <pre>
        <?php
            date_default_timezone_set('Brazil/East');
            $agora = getdate();
            print_r($agora); echo "</br>"."</br>";
            $hora = $agora["hours"];
            $minutos = $agora["minutes"];
            $segundos = $agora["seconds"];
            $diaDaSemana = $agora["weekday"];
            $diaDoMes = $agora["mday"];
            $mes = $agora["month"];
            $ano = $agora["year"];
            
            
            
            

            print_r ("Hoje é " . $diaDaSemana .", " . $diaDoMes .
                    " de " . $mes . " de " . $ano .
                    ".</br></br>Agora são ". $hora . ":" . 
                    $minutos. ":" . $segundos .
                    ", horário de Brasília.");
            
        ?>
        </pre>
    </body>
</html>