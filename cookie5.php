<?php
if(isset($_POST['color'])){ //comprueva si alguien envia algo a traves de la variable post
    $color = $_POST['color']; //define la variable para saber el color.
    setcookie("color", $color, time()+800000); // son variables distintas porque una viene por POST y la otra es de la cookie
} else { //Entro por la pagina por el link, sin hacer click en submit
    if (isset($_COOKIE['color'])){
        $color=$_COOKIE['color'];//hay cookie 
    } else {
        $color = 'white'; //nunca estuvo y se aplica por defecto esto
    }    
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ejercicio Colores</title>
    </head>
    <body <?php echo "style='background-color:$color'"; ?> >
        <form method="post" action="cookie5.php">
            <label for="color">Escoje color de fondo</label>
            <select name="color">
                <option value="red">Rojo</option>
                <option value="green">Verde</option>
                <option value="blue">Azul</option>
                <option value="yellow">Amarillo</option>
                <option value="silver">Gris</option>
            </select>
            <input type="submit" value="Cambiar Color!" />
        </form>
    </body>
</html>