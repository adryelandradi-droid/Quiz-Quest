<?php
session_start();
if (isset($_POST["Quest4"])) {
    $_SESSION["Quest4"] = $_POST["Quest4"];
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="QuizFases.css">
    <title>Fase 5</title>
</head>

<body>
    <br>
    <h1 class="titulo"><img src="img/titulo3.png" alt=""></h1>
    <form action="QuizFase6.php" method="post">
        <p class="h1">5. Qual jogo é conhecido por seu herói em uma armadura futurista?</p>

        <img class="capa" src="img/QuizFase5.png" alt="">

        <input type="radio" id="a" name="Quest5" value="A" class="radio-img">
        <label for="a" class="botao-opcao">A) Metroid</label><br>

        <input type="radio" id="b" name="Quest5" value="B" class="radio-img">
        <label for="b" class="botao-opcao">B) Contra</label><br>

        <input type="radio" id="c" name="Quest5" value="C" class="radio-img">
        <label for="c" class="botao-opcao">C) Mega Man 11</label><br>

        <input type="radio" id="d" name="Quest5" value="D" class="radio-img">
        <label for="d" class="botao-opcao">D) Blaster Master</label><br><br><br>
        
        <button type="image" src="img/bottonnextpressionado.png" class="play"></button>
    </form>
</body>

</html>
