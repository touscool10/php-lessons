

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
            foreach ($agora as $key => $value) {
                echo $key."</br>";
            }
            
        ?>
        </pre>
    </body>
</html>