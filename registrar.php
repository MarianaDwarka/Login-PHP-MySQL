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
                $password = trim($_POST['password']);
                $fecha = date("d/m/y");

                // Prepara la consulta SQL para insertar los datos en la base de datos.
                $consulta = "INSERT INTO datos(nombre, email, direccion, telefono, contraseña, fecha)
                    VALUES('$name', '$email', '$direction', '$phone', '$password', '$fecha')";
                
                // Ejecuta la consulta SQL.
                $resultado = mysqli_query($conex, $consulta);

                // Verifica si la consulta fue exitosa y muestra un mensaje correspondiente.
                if($resultado){
                    ?>
                        <h3 class = "success"> Tu registro se ha completado</h3>
                    <?php
                } else{
                    ?>
                        <h3 class = "error"> Ocurrió un error</h3>
                    <?php
                }
            // Si no se cumplen las condiciones de validación (es decir, si alguno de los campos está vacío), 
            //se muestra un mensaje pidiendo al usuario que llene todos los campos:
            } else {
                ?>
                    <h3 class = "error"> Llena todos los campos </h3>
                <?php
            }
    }

?>
