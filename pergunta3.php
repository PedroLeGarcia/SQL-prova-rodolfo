<?php
    session_start();    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pergunta 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="main">
        <div class="containe">
            <div class="pergunta">
                <form action="pergunta4.php" method="post">
                    <h3>Pergunta 3</h3>
                    <label for="1perg">Lorem </label><br>
                    <input type="radio" class="perg" name="primeira">Lorem<br>
                    <input type="radio" class="perg" id="pergCerta" name="primeira">Lorem<br>
                    <input type="radio" class="perg" name="primeira">Lorem<br>
                    <input type="radio" class="perg" name="primeira">Lorem<br><br> 

                    <input type="submit" value="Enviar" id="botao">
                    
                </form>
            </div>
        </div>
    </div>

</body>
</html>