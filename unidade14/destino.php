<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body> 
        <?php
            
            $nome = isset($_POST["nome"]) ? $_POST["nome"] : "Sem definição"."<br>";
            $email = isset($_POST["email"]) ? $_POST["email"] : "Sem definição"."<br>";
            echo "Nome: ". $nome."<br>";
            echo "E-mail: ". $email."<br>";


        ?>
    </body>
</html>