<?php
    session_start();    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pergunta 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="main">
        <div class="containe">
            <div class="pergunta">
                <form action="pergunta3.php" method="post">
                    <h3>Pergunta 2</h3>
                    <label for="1perg">Que dia eu vou me matar?</label><br>
                    <input type="radio" id="perg" name="primeira">Hoje<br>
                    <input type="radio" id="perg" name="primeira">Amanhã<br>
                    <input type="radio" id="perg" name="primeira">Ontem<br>
                    <input type="radio" id="perg" name="primeira">Anteontem<br><br> 

                    <input type="submit" value="Enviar">
                    
                </form>
            </div>
        </div>
    </div>

</body>
</html>