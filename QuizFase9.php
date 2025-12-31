<?php
    session_start();
    if (isset($_POST["Quest8"])) {
        $_SESSION["Quest8"] = $_POST["Quest8"];
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="QuizFases.css">
    <title>Fase 9</title>
</head>

<body>
    <br>
    <h1 class="titulo"><img src="img/titulo3.png" alt=""> </h1>
    <form action="QuizFase10.php" method="post">
        <p class="h1">9. Qual jogo do Atari 2600 começa com um personagem pendurado em cipós?</p>
        <img class="capa" src="img/QuizFase.9.jpg" alt=""><br><br>

        <input type="radio" id="a" name="Quest9" value="A" class="radio-img">
        <label for="a" class="botao-opcao">A) Jungle Hunt</label><br>
        
        <input type="radio" id="b" name="Quest9" value="B" class="radio-img">
        <label for="b" class="botao-opcao">B) Pitfall!</label><br>

        <input type="radio" id="c" name="Quest9" value="C" class="radio-img">
        <label for="c" class="botao-opcao">C) Kaboom!</label><br>

        <input type="radio" id="d" name="Quest9" value="D" class="radio-img">
        <label for="d" class="botao-opcao">D) Keystone Kapers</label><br><br><br>
        
        <button type="image" src="img/bottonnextpressionado.png" class="play"></button>
    </form>

</body>
</html>
