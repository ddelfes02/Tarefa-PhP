<?php

$nota = $_POST["nota"];
$presenca = $_POST["presenca"];

if ($nota >= 70 && $presenca >= 60) {
    $resultado = "Aluno aprovado";
    $classe = "aprovado";
} else {
    $resultado = "Aluno reprovado";
    $classe = "reprovado";
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Escolar</title>
    <link rel="stylesheet" href="Pag-2-style.css">
</head>
<body>

    <div class="container">
        <div class="cabecalho">
            <h1>Resultado Escolar</h1>
            <p>Situação final do aluno</p>
        </div>

        <div class="resultado <?php echo $classe; ?>">
            <?php echo $resultado; ?>
        </div>

        <div class="informacoes">
            <p><strong>Nota:</strong> <?php echo $nota; ?></p>
            <p><strong>Presença:</strong> <?php echo $presenca; ?>%</p>
        </div>

        <a href="Pag_1.html" class="botao-voltar">Voltar</a>

        <div class="rodape">
        </div>
    </div>

</body>
</html>