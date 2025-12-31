<?php
session_start();
if (isset($_POST["Quest2"])) {
    $_SESSION["Quest2"] = $_POST["Quest2"];
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="QuizFases.css">
    <title>Fase 3</title>
</head>

<body>
    <br>
    <h1 class="titulo"><img src="img/titulo3.png" alt=""></h1>
    
    <form action="QuizFase4.php" method="post">
        <p class="h1">3. Qual jogo do Atari 2600 tem esse personagem?</p>
        <img class="capa" src="img/QuizFase3.jpg" alt=""><br><br>

        <input type="radio" id="a" name="Quest3" value="A" class="radio-img">
        <label for="a" class="botao-opcao">A) Jungle Hunt</label><br>

        <input type="radio" id="b" name="Quest3" value="B" class="radio-img">
        <label for="b" class="botao-opcao">B) Pitfall!</label><br>

        <input type="radio" id="c" name="Quest3" value="C" class="radio-img">
        <label for="c" class="botao-opcao">C) River Raid</label><br>

        <input type="radio" id="d" name="Quest3" value="D" class="radio-img">
        <label for="d" class="botao-opcao">D) Adventure</label><br><br><br>

        <button type="image" src="img/bottonnextpressionado.png" class="play"></button>
    </form>
</body>

</html>
