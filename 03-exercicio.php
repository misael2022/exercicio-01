<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios 03 - condicionais</title>
</head>
<body>
    <h1>Condicionais</h1>
    <hr>

    <?php
        $salarios = 2500;

        $salarios1 = $salarios*1.15;
        $salarios2 = $salarios*1.10;
        $salarios3 = $salarios*1.05;

        if ($salarios > 500) {
            echo "<P> Seu salario e de $salarios R$, entao o aumento e de 15%, resultando em $salarios1.";

        } elseif ($salarios1 >= 1000) {
            echo "<p> Seu salario e de $salarios R$, entao o aumento e de 10%, resultando em $salarios2.";

        } else {
            echo "Seu salario e de $salarios R$, portanto ele tera um aumento de 5%, resultando em $salarios3";
        }
        
    ?>
</body>
</html>