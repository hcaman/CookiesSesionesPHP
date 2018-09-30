<?php
    if(isset($_COOKIE['visita'])){
        echo "Que alegria verte de nuevo por aqui!";
    } else {
        setcookie('visita', 'ok', time()+31536000);
        echo "Bienvenido a mi pagina !";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 2</title>
</head>
<body>
    
</body>
</html>