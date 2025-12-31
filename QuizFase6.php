<?php
session_start();
if (isset($_POST["Quest5"])) {
    $_SESSION["Quest5"] = $_POST["Quest5"];
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="QuizFases.css">
    <title>Fase 6</title>
</head>

<body>
    <br>
    <h1 class="titulo"><img src="img/titulo3.png" alt=""></h1>
    <form action="QuizFase7.php" method="post">
        <p class="h1">6. Em qual jogo do Atari 2600 o jogador pilota um avião em um rio?</p>
        <img class="capa" src="img/QuizFase6.png" alt=""><br><br>
        
        <input type="radio" id="a" name="Quest6" value="A" class="radio-img">
        <label for="a" class="botao-opcao">A) River Raid</label><br>

        <input type="radio" id="b" name="Quest6" value="B" class="radio-img">
        <label for="b" class="botao-opcao">B) Pitfall!</label><br>

        <input type="radio" id="c" name="Quest6" value="C" class="radio-img">
        <label for="c" class="botao-opcao">C) Air Raiders</label><br>

        <input type="radio" id="d" name="Quest6" value="D" class="radio-img">
        <label for="d" class="botao-opcao">D) Combat</label><br><br><br>

        <button type="image" src="img/bottonnextpressionado.png" class="play"></button>
    </form>
</body>

</html>
