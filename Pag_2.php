<?php
    $nome1 = $_POST["nome1"];
    $nome2 = $_POST["nome2"];
    $nome3 = $_POST["nome3"];
    $nome4 = $_POST["nome4"];
    $nome5 = $_POST["nome5"];
    $nome6 = $_POST["nome6"];
    $nome7 = $_POST["nome7"];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados enviados</title>

    <link rel="stylesheet" href="Pag-2-style.css">
</head>
<body>
    <div class="resultado">
        <h1>Dados enviados</h1>

        <p>Seu nome é: <?php echo $nome1; ?></p>
        <p>Sua idade é: <?php echo $nome2; ?></p>
        <p>Seu gênero é: <?php echo $nome3; ?></p>
        <p>Sua nacionalidade é: <?php echo $nome4; ?></p>
        <p>Sua cidade é: <?php echo $nome5; ?></p>
        <p>Seu CPF é: <?php echo $nome6; ?></p>
        <p>Seu estado civil é: <?php echo $nome7; ?></p>
    </div>
</body>
</html>