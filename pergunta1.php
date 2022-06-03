<?php
    session_start();    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pergunta 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="main">
        <div class="containe">
            <div class="pergunta">
                <form action="pergunta2.php" method="post">
                    <h3>Pergunta 1</h3>
                    <label for="1perg">Qual a autura do professor Paulinho?</label><br>
                    <input type="radio" id="perg" name="primeira">1.60m<br>
                    <input type="radio" id="perg" name="primeira">1.50m<br>
                    <input type="radio" id="perg" name="primeira">1.55m<br>
                    <input type="radio" id="perg" name="primeira">1.70m<br><br> 

                    <input type="submit" value="Enviar">
                    
                </form>
            </div>
        </div>
    </div>

</body>
</html>