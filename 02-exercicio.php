<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios-02</title>
    <style>

        h2 {
            color: brown;
        }

        p{
            color: black;
        }
        body {
            background-color: burlywood;
        }

        article{
            border: solid 2.5px;
            background-color: cadetblue;
            padding: 20px;
        }
    </style>
</head>
<body>
    <h1>Exercicios 02 - Arrays</h1>
    <hr>

    <?php
        $pessoa = [
            "nome" => "Marcos",
            "idade" => 25,
            "email" => "marcos01zousa@gmail.com",
            "sexo" => "Masculino",
        ];
    ?>

    <?php
        $pessoa2 = [
            "nome" => "Laura",
            "idade" => 30,
            "email" => "LauraGimenez@gmail.com",
            "sexo" => "Femenino",
        ];
    ?>

<article>
    <h2><?=$pessoa['nome']?></h2>
    <p>Idade: <?=$pessoa ['idade']?></p>
    <p>Sexo: <?=$pessoa ['sexo']?></p>
    <p>Email: <?=$pessoa ['email']?></p>
</article>

<hr>
<article>
    <h2><?=$pessoa2['nome']?></h2>
    <p>Idade: <?=$pessoa2['idade']?></p>
    <p>Sexo: <?=$pessoa2['sexo']?></p>
    <p>Email: <?=$pessoa2['email']?></p>
    </article>
</body>
</html>