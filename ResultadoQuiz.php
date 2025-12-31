<?php
session_start();
    if (isset($_POST["Quest10"])) {
        $_SESSION["Quest10"] = $_POST["Quest10"];
    }

$respostas_corretas = [
    "Quest1" => "B",
    "Quest2" => "C",
    "Quest3" => "B",
    "Quest4" => "B",
    "Quest5" => "C",
    "Quest6" => "A",
    "Quest7" => "D",
    "Quest8" => "C",
    "Quest9" => "B",
    "Quest10" => "C"
];

$acertos = 0;
$erros = 0;
$acertos_respostas = [];
$erros_respostas = [];
$total_perguntas = 10;

foreach ($respostas_corretas as $pergunta => $resposta_correta) {
    $resposta_usuario = isset($_SESSION[$pergunta]) ? $_SESSION[$pergunta] : null;

    if ($resposta_usuario == $resposta_correta) {
        $acertos++;
        $acertos_respostas[] = $pergunta;
    } else {
        $erros++;
        $erros_respostas[] = $pergunta;
    }
}
$porcentagem_acertos = ($acertos / $total_perguntas) * 100;
$perguntas_texto = [
    "Quest1" => "1.",
    "Quest2" => "2.",
    "Quest3" => "3.",
    "Quest4" => "4.",
    "Quest5" => "5.",
    "Quest6" => "6.",
    "Quest7" => "7.",
    "Quest8" => "8.",
    "Quest9" => "9.",
    "Quest10" => "10."
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="QuizFinal.css">
    <title>Resultado Final</title>
</head>
<body>
    <br>
    <h1 class="titulo"><img src="img/titulo3.png" alt=""></h1>
    <div class="container">
        <h2 class="titulo2">Você acertou as seguintes perguntas:</h2>
        <ul class="acertos">
            <?php foreach ($acertos_respostas as $acerto): ?>
            <li>
                <?php echo $perguntas_texto[$acerto]; ?>Sua resposta: <strong><?php echo $_SESSION[$acerto]; ?></strong> // Resposta correta:
                <strong><?php echo $respostas_corretas[$acerto]; ?></strong>
            </li>
            <?php endforeach; ?>
        </ul>


        <h2 class="titulo2">Você errou as seguintes perguntas:</h2>
<ul class="erros">
    <?php foreach ($erros_respostas as $erro): ?>
        <li>
            <?php echo $perguntas_texto[$erro]; ?>Sua resposta: <strong><?php echo isset($_SESSION[$erro]) ? $_SESSION[$erro] : 'Vazia'; ?></strong> // Resposta correta: <strong><?php echo $respostas_corretas[$erro]; ?></strong>
        </li>
    <?php endforeach; ?>
</ul>
        </ul>
        <div class="resultados">
            <p><strong>Você acertou <?php echo $acertos; ?> de <?php echo $total_perguntas; ?> perguntas!</strong></p>
            <p><strong>Porcentagem de acertos: <?php echo $porcentagem_acertos; ?>%</strong></p>
        </div>

        <a href="menu.html"><img class="reset" src="img/retry.png"></a>
    </div>
</body>
</html>