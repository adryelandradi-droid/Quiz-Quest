<?php
session_start();
if (isset($_POST["Quest3"])) {
    $_SESSION["Quest3"] = $_POST["Quest3"];
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="QuizFases.css">
    <title>Fase 4</title>
</head>
<body>
    <br>
    <h1 class="titulo"><img src="img/titulo3.png" alt=""> </h1>
    <form action="QuizFase5.php" method="post">
        <p class="h1">4. Qual jogo do NES apresenta um encanador salvando uma princesa?</p>
        <img class="capa" src="img/QuizFase.4.jpg" alt=""><br>

        <input type="radio" id="a" name="Quest4" value="A" class="radio-img">
        <label for="a" class="botao-opcao">A) Metroid</label><br>

        <input type="radio" id="b" name="Quest4" value="B" class="radio-img">
        <label for="b" class="botao-opcao">B) Super Mario Bros.</label><br>

        <input type="radio" id="c" name="Quest4" value="C" class="radio-img">
        <label for="c" class="botao-opcao">C) Castlevania</label><br>

        <input type="radio" id="d" name="Quest4" value="D" class="radio-img">
        <label for="d" class="botao-opcao">D) Contra</label><br><br><br>

        <button type="image" src="img/bottonnextpressionado.png" class="play"></button>
    </form>
</body>
</html>
