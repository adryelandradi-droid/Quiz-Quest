<?php
    session_start();
    if (isset($_POST["Quest9"])) {
        $_SESSION["Quest9"] = $_POST["Quest9"];
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="QuizFases.css">
    <title>Fase 10</title>
</head>
<body>
    <br>
    <h1 class="titulo"><img src="img/titulo3.png" alt=""></h1>
    <form action="ResultadoQuiz.php" method="post">
        <p class="h1">10. Em qual jogo o jogador deve invadir bases inimigas e resgatar reféns?</p>
        <img class="capa" src="img/QuizFase10.jpg" alt=""><br><br>

        <input type="radio" id="a" name="Quest10" value="A" class="radio-img">
        <label for="a" class="botao-opcao">A) Contra</label><br>

        <input type="radio" id="b" name="Quest10" value="B" class="radio-img">
        <label for="b" class="botao-opcao">B) Metal Gear</label><br>

        <input type="radio" id="c" name="Quest10" value="C" class="radio-img">
        <label for="c" class="botao-opcao">C) Commando</label><br>

        <input type="radio" id="d" name="Quest10" value="D" class="radio-img">
        <label for="d" class="botao-opcao">D) Rambo</label><br><br><br>
        
        <button type="image" src="img/bottonnextpressionado.png" class="play"></button>
    </form>
</body>
</html>
