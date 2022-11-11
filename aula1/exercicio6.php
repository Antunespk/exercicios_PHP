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
        <h3>6.Faça um script que calcule a área de um quadrado, em seguida mostre o dobro desta área para o usuário.</h3>
        <form action="exercicio6.php" method="get">
        <input type="number" name="largura">
        <input type="number" name="comprimento">
        <input type="submit" value="calcular">

        </form>
        <?php

        $largura = $_GET["largura"];
        $comprimento = $_GET["comprimento"];
        $calculo = $largura*$comprimento;
        $resposta = $calculo*2;

        echo "A resposta é: ".$resposta ;
        
        
        ?>

    </div>
</body>
</html>