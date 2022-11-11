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
        <h3>12.Tendo como dado de entrada a altura (h) de uma pessoa, construa um script que calcule seu peso ideal,
            utilizando as seguintes fórmulas:<br/>
            •Para homens: (72.7*h) - 58 <br/>
            •Para mulheres: (62.1*h) – 44.7</h3>

        <form action="exercicio12.php" method="get">

        <input type="text" name="altura" placeholder="Digite a altura em metros">
        <input type="submit" value="calcular">
        </form>
        <?php

        $alt=$_GET["altura"];
        $resp= (72.7*$alt)-58;
        $resp2= (62.1*$alt)-44.7;
        

        echo "Se você é homem, seu peso ideal é: ".$resp;
        echo "<br/>Se você é Mulher, seu peso ideal é: ".$resp2;
        
        ?>

    </div>
</body>
</html>