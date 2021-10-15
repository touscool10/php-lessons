<?php 
    //função que converte métricas
    //celsius para fahrenheit
    function converterCelsiusParaFahrenheit($_celcius){
        $_Fahrenheit = 32 + ($_celcius * (9/5));
        return $_Fahrenheit;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php 
        echo converterCelsiusParaFahrenheit(20)."</br>"."</br>";
    ?>
</body>
</html>