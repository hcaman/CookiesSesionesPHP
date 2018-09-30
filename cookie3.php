<?php
$fecha = date("d/m/Y | H:i:s");
setcookie("fecha", $fecha, time()+31536000);
if(isset($_COOKIE['fecha'])){
    echo "Hola de nuevo, tu ultima visita fue el ".$_COOKIE['fecha'];
} else {
    echo "Bienvenido, esta es tu primera visita a mi pagina !";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>