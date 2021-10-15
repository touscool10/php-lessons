<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php 
        $_contador = 6;                   
        for ($_i = $_contador ; $_i > 0  ; $_i--) {
            echo rand(1,60) . " ";
        }
    ?>
</body>
</html>