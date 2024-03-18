<?php
    // Incluye el archivo de conexión a la base de datos.
    include("conexion.php");

// Validamos que el formulario y que el boton login haya sido presionado
if(isset($_POST['login'])) {

    // Obtener los valores enviados por el formulario
    $usuario = $_POST['name'];
    $password = $_POST['password'];
    
    // Ejecutamos la consulta a la base de datos utilizando una sentencia preparada
    // Preparar una sentencia SQL segura
    $stmt = $conex->prepare("SELECT * FROM datos WHERE nombre = ? AND contraseña = ?");
    // Vincular parámetros a la sentencia preparada
    $stmt->bind_param("ss", $usuario, $password);
    // Ejecutar la sentencia
    $stmt->execute();
    // Obtener los resultados
    $resultado = $stmt->get_result();

    $numero_registros = mysqli_num_rows($resultado);
        if($numero_registros != 0) {
            // Inicio de sesión exitoso
            echo "<h3 class = 'success'> Bienvenido</h3>";
        } else {
            // Credenciales inválidas
            echo "<h3 class = 'error'>Credenciales inválidas. Por favor, verifica tu nombre de usuario y/o contraseña.</h3>";
        }
    }

?>
