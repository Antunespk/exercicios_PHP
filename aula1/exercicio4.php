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
        <h3>4.Faça um script que peça as 3 notas de um aluno e mostre a média.</h3>
        <form action="exercicios.php" method="get">

            <input type="number" name="nota1">
            <input type="number" name="nota2">
            <input type="number" name="nota3">
            <input type="submit" value="calcular">
        </form>
        <?php
$n1 = $_GET["nota1"];
$n2 = $_GET["nota2"];
$n3 = $_GET["nota3"];
$media = ($n1+$n2+$n3)/3;

echo "<br/> A média do aluno é: ".$media;

        ?>
    </div>
</body>
</html>