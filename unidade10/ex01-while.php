


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        $_counter  = 1;
        while ($_counter  < 7) {
            echo rand(1,60)." ";
            $_counter  = $_counter + 1;
        }
    ?>
</body>
</html>