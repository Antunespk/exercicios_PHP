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
        <h3>8.Faça um script que peça a temperatura em graus Farenheit, transforme e mostre a temperatura em graus Celsius.
            •C = (5 * (F-32) / 9).</h3>

        <form action="exercicio8.php" method="get">

        <input type="number" name="tempF" placeholder="Qual a temperatura em F?">
        <input type="submit" value="calcular">
        </form>
        <?php

        $f = $_GET["tempF"];
        $celsius = 5*($f-32)/9 ;

        echo "A temperatura convertida é: ".$celsius."C" ;
        ?>

    </div>
</body>
</html>