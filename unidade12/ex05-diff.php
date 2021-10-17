
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $data1 = new DateTime('2022-03-05');
            $data2 = new DateTime('2021-10-17');
            $intervalo = $data1 -> diff($data2);
        ?> 

        <pre>
            <?php
            print_r($intervalo); echo "</br>"."</br>";
            print_r($intervalo->format('%y anos %m meses %d dias %h horas %i minutos %s segundos')); echo "</br>"."</br>";
            print_r($intervalo->format('%a dias de diferença')); echo "</br>"."</br>";
            print_r($intervalo->format('%r%a dias de diferença')); echo "</br>"."</br>";
            
            
            ?>
        </pre>

    </body>
   
</html>



