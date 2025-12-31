<?php
session_start();
if (isset($_POST["Quest1"])) {
    $_SESSION["Quest1"] = $_POST["Quest1"];
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="QuizFases.css">
    <title>Fase 2</title>
</head>
<body>
    <br>
    <h1 class="titulo"><img src="img/titulo3.png" alt=""></h1>
    <form action="QuizFase3.php" method="post">
        <p class="h1">2. Qual é o nome deste jogo clássico lançado em 1980?</p>
        <img class="capa" src="img/QuizFase2.png" alt=""><br><br>

        <input type="radio" id="a" name="Quest2" value="A" class="radio-img">
        <label for="a" class="botao-opcao">A) Donkey Kong</label><br>

        <input type="radio" id="b" name="Quest2" value="B" class="radio-img">
        <label for="b" class="botao-opcao">B) Space Invaders</label><br>

        <input type="radio" id="c" name="Quest2" value="C" class="radio-img">
        <label for="c" class="botao-opcao">C) Pac-Man</label><br>

        <input type="radio" id="d" name="Quest2" value="D" class="radio-img">
        <label for="d" class="botao-opcao">D) Frogger</label><br><br><br>

        <button type="image" src="img/bottonnextpressionado.png" class="play"></button>
    </form>
</body>
</html>
