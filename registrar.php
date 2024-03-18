<?php
    // Incluye el archivo de conexión a la base de datos.
    include("conexion.php");

    //Verifica si se ha enviado el formulario con el botón 'register'.
    if (isset($_POST['register'])) {

        // Verifica que los campos del formulario no estén vacíos.
        if (
            strlen($_POST['name']) >= 1 &&
            strlen($_POST['email']) >= 1 &&
            strlen($_POST['direction']) >= 1 &&
            strlen($_POST['phone']) >= 1 &&
            strlen($_POST['password']) >= 1
            ){
                // Recorta los espacios en blanco de los valores del formulario.
                $name = trim($_POST['name']);
                $email = trim($_POST['email']);
                $direction = trim($_POST['direction']);
                $phone = trim($_POST['phone']);
                // Aplicar hashing a la contraseña
                $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);
                $fecha = date("d/m/y");

                // Preparar una sentencia SQL segura
                $stmt = $conex->prepare("INSERT INTO datos(nombre, email, direccion, telefono, contraseña, fecha) VALUES (?, ?, ?, ?, ?, ?)");

                // Vincular los parámetros a la sentencia preparada
                $stmt->bind_param("ssssss", $name, $email, $direction, $phone, $password, $fecha);

                // Ejecutar la sentencia preparada
                $resultado = $stmt->execute();

                // Verifica si la consulta fue exitosa y muestra un mensaje correspondiente.
                if($resultado){
                        echo "<h3 class = 'success'> Tu registro se ha completado</h3>";
                } else{
                        echo "<h3 class = 'error'> Ocurrió un error</h3>";
                }
            // Si no se cumplen las condiciones de validación (es decir, si alguno de los campos está vacío), 
            //se muestra un mensaje pidiendo al usuario que llene todos los campos:
            } else {
                    echo "<h3 class = 'error'> Llena todos los campos</h3>";
            }
    }

?>
