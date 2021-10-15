<?php 
    function calcularDiaria($_salario, $_dias){
        return number_format($_salario/$_dias , 2);
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
        $_salary1 = 2500.00; $_dias1 = 15;
        $_salary2 = 5000.00; $_dias2 = 10;
        //$_months = 12;
        echo "A diária do funcionário 1 é : R$ ".calcularDiaria($_salary1,$_dias1)."</br>"."</br>";
        echo "A diária do funcionário 2 é : R$ ".calcularDiaria($_salary2,$_dias2)."</br>"."</br>";
    ?>
</body>
</html>