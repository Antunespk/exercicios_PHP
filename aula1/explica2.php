<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="explica2.php" method="get">
<div>

    Digite o primeiro numero:<br/>
    
    <input type="text" name="numero1" id=""/>
    
    <br/><br/>
    
    Digite o segundo numero:<br/>
    
    <input type="text" name="numero2" id=""/>
    
    <br/><br/>
    
    <input type="submit" value="Calcular">
</div>
    
<?php
// Entrada
    $n1 = $_GET["numero1"];
    $n2 = $_GET["numero2"];
//Processamento
$auxSoma = $n1 + $n2;
$auxSub = $n1 - $n2;
$auxMult = $n1 * $n2;
$auxDiv = $n1 / $n2;
$auxPotencia = $n1 ** $n2;




//Saída
    echo "Primeiro numero digitado: ".$n1."<br/>";
    echo "Segundo número digitado: ".$n2."<br/>";
    echo "A soma dos valores é: ".$auxSoma."<br/>";
    echo "A subtração dos valores é: ".$auxSub."<br/>";
    echo "A multiplicação dos valores é: ".$auxMult."<br/>";
    echo "A divisão dos valores é: ".$auxDiv."<br/>";


?>
    </form>
</body>
</html>