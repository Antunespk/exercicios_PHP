<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <div>
        <h3>9.Faça um script que peça a temperatura em graus Celsius, transforme e mostre em graus Farenheit.</h3>

        <form action="exercicio9.php" method="get">

        <input type="number" name="tempC" placeholder="Qual a temperatura em C?">
        <input type="submit" value="calcular">
        </form>
        <?php

        $c = $_GET["tempC"];
        $f = ($c*9/5)+32 ;

        echo "A temperatura convertida é: ".$f."F" ;
        ?>

    </div>
</body>
</html>