
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        $_salada = array("uva","abacate",444.478,"iii","true","iiiii",48*48,454);
         
        foreach ($_salada as $_frutas) {
            echo $_frutas."</br>"."</br>";
        }
    ?>
</body>
</html>