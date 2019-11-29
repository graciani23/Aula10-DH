<?php
    // Definir meu array associativo $pessoa1
    $pessoa1 = [
        "nome" => "João Lucas",
        "idade" => 5,
        "masculino" => true,
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="pessoa">
        <img src="./img/person.jpg" alt="<?= $pessoa1['nome']; ?>">
        <div class="dados">
            <div class="info">
                <span>Nome:</span>
                <div><?= $pessoa1['nome']; ?></div>
            </div>
            <div class="info">
                <span>Idade:</span>
                <div><?= $pessoa1['idade']?></div>
            </div>
            <div class="info">
                <span>Sexo:</span>
                <div>
                <?php
                // if ($pessoa1["feminino"]) {
                //     echo ("Feminino");
                // } else {
                //     echo ("Masculino");
                // }

                echo ($pessoa1['masculino'] ? 'Masculino' : 'Feminino');
                ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>