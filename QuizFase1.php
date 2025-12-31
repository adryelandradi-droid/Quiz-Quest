<?php
session_start();
if (isset($_POST["nome"])) {
    $_SESSION["nome"] = $_POST["nome"];
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="QuizFases.css">
    <title>Fase 1</title>

</head>
<body><br>
    <h1 class="titulo"><img src="img/titulo3.png" alt=""></h1>
    <form action="QuizFase2.php" method="post">
        <p class="h1">1. Qual item faz o Mario crescer de tamanho no jogo?</p>
        <img class="capa" src="img/QuizFase1.png" alt=""><br><br>

        <input type="radio" id="a" name="Quest1" value="A" class="radio-img">
        <label for="a" class="botao-opcao">A) Estrela</label><br>

        <input type="radio" id="b" name="Quest1" value="B" class="radio-img">
        <label for="b" class="botao-opcao">B) Cogumelo vermelho</label><br>

        <input type="radio" id="c" name="Quest1" value="C" class="radio-img">
        <label for="c" class="botao-opcao">C) Flor de fogo</label><br>

        <input type="radio" id="d" name="Quest1" value="D" class="radio-img">
        <label for="d" class="botao-opcao">D) Moeda dourada</label><br><br><br>

        <button type="image" src="img/bottonnextpressionado.png" class="play"></button>
    </form>
</body>
</html>
