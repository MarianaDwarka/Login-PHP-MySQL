<?php
    // Incluye el archivo de conexión a la base de datos.
    include("conexion.php");

// Validamos que el formulario y que el boton login haya sido presionado
if(isset($_POST['login'])) {

    // Obtener los valores enviados por el formulario
    $usuario = $_POST['name'];
    $password = $_POST['password'];
    
    // Ejecutamos la consulta a la base de datos utilizando la función mysqli_query
    $sql = "SELECT * FROM datos WHERE nombre = '$usuario' and contraseña = '$password'";
    $resultado = mysqli_query($conex, $sql);
    $numero_registros = mysqli_num_rows($resultado);
        if($numero_registros != 0) {
            // Inicio de sesión exitoso
            ?>
            <h3 class = "success"> Bienvenido </h3>
            <?php

        } else {
            // Credenciales inválidas
            ?>
            <h3 class = "error">Credenciales inválidas. Por favor, verifica tu nombre de usuario y/o contraseña.</h3>
            <?php
        }
    }

?>