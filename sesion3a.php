<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sesiones</title>
    </head>
    <body>
        <?php if ($_GET[error] == "si") { // tambien se puede hacer por isset
            echo "Tu usuario y/o password no son correctos, intenta nuevamente<br/><br/>";
        } elseif($_GET[error] == 'fuera') {
            echo "No puedes entrar directamente en esta pagina. Debes introducir tu usuario y password<br/><br/>";
        }
        ?>
        <form action="sesion3b.php" method="post">
            <label for="nombre">Nombre de usuario</label>
            <input type="text" name="nombre" placeholder="Tu nombre!" />
            <label for="pass">Password</label>
            <input type="password" name="pass" />
            <br/>
            <input type="submit" value="Entrar!" />
        </form>
    </body>
</html>