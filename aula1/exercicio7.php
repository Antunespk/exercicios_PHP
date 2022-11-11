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
        <h3>7.Faça um script que pergunte quanto você ganha por hora e o número de horas trabalhadas no mês.
            Calcule e mostre o total do seu salário no referido mês.</h3>

        <form action="exercicio7.php" method="get">

        <input type="number" name="valorHora" placeholder="Qual o valor hora?">
        <input type="number" name="horaTrabalhada" placeholder="Quantas horas você trabalhou?">
        <input type="submit" value="calcular">

        </form>
        <?php

        $valorHora = $_GET["valorHora"];
        $horaTrabalhada = $_GET["horaTrabalhada"];
        $calculo = $valorHora*$horaTrabalhada;

        echo "Seu salário no respectivo mês é: ".$calculo ;
        ?>

    </div>
</body>
</html>