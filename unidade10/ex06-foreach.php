

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        $_agenda = array(  "nome" => "Crespin",
                           "telefone" => "(48) 99125-2887",
                            "salário" => 5000.00 ." R$");
       foreach ($_agenda as $_contatos => &$_valor) {
            $_valor = $_valor."FUCK";
            echo $_contatos. " : ". $_valor."</br>"."</br>";
        }
        echo $_contatos."</br>"."</br>";
    ?>
</body>
</html>