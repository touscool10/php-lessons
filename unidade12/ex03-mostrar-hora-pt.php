<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
            <?php
                setlocale(LC_TIME, "portuguese");
                date_default_timezone_set('Brazil/East');
                $agora = getdate();
                $hora = $agora["hours"];
                $minutos = $agora["minutes"];
                $segundos = $agora["seconds"];
                //$diaDaSemana = $agora["weekday"];
                $diaDaSemana = strftime('%A');
                $diaDoMes = $agora["mday"];
                //$mes = $agora["month"];
                $mes = strftime('%B');
                $ano = $agora["year"];
            ?>      
   
        <pre>
            <?php
                print_r($agora); echo "</br>"."</br>";
                print_r ("Hoje é " . $diaDaSemana .", " . $diaDoMes .
                        " de " . $mes . " de " . $ano .
                        ".</br></br>Agora são ". $hora . ":" . 
                        $minutos. ":" . $segundos .
                        ", horário de Brasília.");
            
            ?>
        </pre>
    </body>
</html>