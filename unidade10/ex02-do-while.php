<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        $_counter = 1;
        do {
            echo "Cr7"."</br>"."</br>";
            $_counter = $_counter + 1;
        } while ($_counter < 1);

        $_contador = 1;
        do {
            echo rand(1,60)." ";
            $_contador = $_contador + 1;
        } while ($_contador <= 6);
    ?>
</body>
</html>