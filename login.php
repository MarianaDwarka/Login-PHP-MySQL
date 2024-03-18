<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form method="post">

        <h2>Inicia sesión</h2>
        <p></p>

        <div class="input-wrapper">
            <input type="text" name ="name" placeholder="Nombre">
            <img class="input-icon" src="images/name.svg" alt="">
        </div>

        <div class="input-wrapper">
            <input type="password" name ="password" placeholder="Contraseña">
            <img class="input-icon" src="images/password.svg" alt="">
        </div>


        <input class="btn" type="submit" name="login" value="Enviar">

        <!-- Enlace para redirigir al formulario de registro -->
        <p class="mt-3">¿No tienes una cuenta? <a href="index.php">Regístrate aquí</a></p>

    </form>


    <?php
        include("iniciosesion.php");
    ?>
</body>
</html>