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
        <h3>11.Tendo como dados de entrada a altura de uma pessoa, construa um script que calcule seu peso ideal,
            usando a seguinte fórmula: (72.7*altura) – 58</h3>

        <form action="exercicio11.php" method="get">

        <input type="text" name="altura" placeholder="Digite a altura">
        <input type="submit" value="calcular">
        </form>
        <?php

        $alt=$_GET["altura"];
        $resp= (72.7*$alt)-58;
        

        echo "Seu peso ideal é: ".$resp;
        
        ?>

    </div>
</body>
</html>