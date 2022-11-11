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
        <h3>10.Faça um script que peça 2 números inteiros e um número real.
        Calcule e mostre:
        •o produto do dobro do primeiro com metade do segundo .
        •a soma do triplo do primeiro com o terceiro.
        •o terceiro elevado ao cubo.</h3>

        <form action="exercicio10.php" method="get">

        <input type="number" name="int1" placeholder="Número 1">
        <input type="number" name="int2" placeholder="Número 2">
        <input type="text" name="parse" placeholder="Número real">
        <input type="submit" value="calcular">
        </form>
        <?php

        $num1=$_GET["int1"];
        $num2=$_GET["int2"];
        $pars=$_GET["parse"];
        $resp1=($num1*2)+($num2/2);
        $resp2=($num1*3)+$parse;
        $resp3=$parse**2;

        echo "Primeira resposta: ".$resp1;
        echo "Segunda resposta: ".$resp2;
        echo "Terceira resposta: ".$resp3;
        ?>

    </div>
</body>
</html>