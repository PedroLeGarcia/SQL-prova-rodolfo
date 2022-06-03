<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <main>
        <div class="main">
            <form action="pergunta1.php" method="POST">
                <input type="text" name="nome" id="nome" placeholder="Digite seu Nome: ">
                <input type="email" name="email" id="email" placeholder="Digite seu Email: ">
                <button type="submit">Enviar!</button>
            </form>
        </div>
    </main>
</body>
</html>

<?php
    $sql = 'INSERT INTO user (nome,email) VALUES ("'.$_POST['nome'].'","'.$_POST['email'].'")';
	$resultado = $con->query($sql);
	if($resultado){
		echo "é isso";
	}else{
		echo "Deu merda fi";
	}
?>

