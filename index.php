<?php
    // Definindo um array de pessoas
    $pessoas = [
        [
            "nome" => "João Lucas",
            "idade" => 5,
            "masculino" => true,
        ],
        [
            "nome" => "Maria Lucia",
            "idade" => 20,
            "masculino" => false,
        ],
        [
            "nome" => "Joana",
            "idade" => 30,
            "masculino" => false,
        ],
    ];
    //  $pos = 2;
    //  $pessoa = $pessoas[$pos];
    // echo('<pre>');
    // mostra todas as informações do array
    //var_dump($pessoa); // monstra detalhes das variáveis
    //print_r($pessoa); //mais fácil para debugar e mostra o array de forma simplificada. No caso de boolean retorna true = 1 e false = a nada
    // echo('<pre>');
    // die(); // interrompe a execução do script nesse ponto
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
    <?php foreach($pessoas as $pos=> $umaDasPessoas) { ?>
        <div class="pessoa">
        <img src="./img/foto<?=$pos?>.jpg" alt="<?= $pessoa['nome']; ?>">
        <div class="dados">
            <div class="info">
                <span>Nome:</span>
                <div><?= $pessoa['nome']; ?></div>
            </div>
            <div class="info">
                <span>Idade:</span>
                <div><?= $pessoa['idade']?></div>
            </div>
            <div class="info">
                <span>Sexo:</span>
                <div>
                <?php
                    echo ($pessoa['masculino'] ? 'Masculino' : 'Feminino');
                ?>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    
</body>
</html>