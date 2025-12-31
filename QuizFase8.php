<?php
session_start();
if (isset($_POST["Quest7"])) {
    $_SESSION["Quest7"] = $_POST["Quest7"];
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="QuizFases.css">
    <title>Fase 8</title>
</head>

<body>
    <br>
    <h1 class="titulo"><img src="img/titulo3.png" alt=""></h1>
    <form action="QuizFase9.php" method="post">
        <p class="h1">8. Qual jogo famoso de labirinto envolve comer pastilhas e fugir de fantasmas?</p>
        <img class="capa" src="img/QuizFase8.jpg" alt=""><br>

        <input type="radio" id="a" name="Quest8" value="A" class="radio-img">
        <label for="a" class="botao-opcao">A) DigDug</label><br>

        <input type="radio" id="b" name="Quest8" value="B" class="radio-img">
        <label for="b" class="botao-opcao">B) Qbert</label><br>

        <input type="radio" id="c" name="Quest8" value="C" class="radio-img">
        <label for="c" class="botao-opcao">C) Pack-Man</label><br>

        <input type="radio" id="d" name="Quest8" value="D" class="radio-img">
        <label for="d" class="botao-opcao">D) Adventure</label><br><br><br>
        
        <button type="image" src="img/bottonnextpressionado.png" class="play"></button>
    </form>
</body>

</html>
