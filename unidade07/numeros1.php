<?php 
    $_salario = 800;
    $_meses   = 3;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            // Multiplicacao e Divisao
            echo "Multiplicação e Divisão :" ." "; 
            echo $_salario * $_meses . "</br>"."</br>"; 
            echo $_salario / 2 . "</br>" . "</br>"; 
            // Exponencial
            echo "Exponencial :" . " ". pow($_salario,2) . "</br>". "</br>";

            // Raiz Quadrada
            echo "Raiz quadrada : " . " " . sqrt($_salario). "</br>". "</br>";

            // Randômico Generica
            echo "Número genérico : " . " " . rand() . "</br>". "</br>";

            // Randômico entre um intervalo
            echo "Número randômico intervalo :" . " " . rand(-5,2). "</br>". "</br>";
            
            // Valor absoluto
            echo "Valor absoluto :" . " " . abs(5.3555)  . "</br>". "</br>";
            
        ?>
    </body>
</html>