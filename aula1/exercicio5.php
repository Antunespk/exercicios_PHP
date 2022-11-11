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
        <h3>5.Faça um script que converta metros para centímetros.</h3>
        <form action="exercicio5.php" method="get">
        <input type="number" name="metros">
        <input type="submit" value="converter">

        </form>
        <?php

        $metros = $_GET["metros"];
        $centimetros = 100;

        echo "A conversão de ".$metros." metros é:".$metros*$centimetros." centímetros";
        
        
        ?>

    </div>
</body>
</html>