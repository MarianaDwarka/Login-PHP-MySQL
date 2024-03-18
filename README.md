# Sistema de Registro e Inicio de Sesión

Este proyecto es un sistema básico de registro e inicio de sesión para una aplicación web. Permite a los usuarios crear una nueva cuenta proporcionando información personal y utilizar esas credenciales para iniciar sesión posteriormente.

---

## Tecnologías Utilizadas

- **HTML:** Utilizado para estructurar las páginas de registro e inicio de sesión, proporcionando el esqueleto del contenido web.
- **CSS:** Aplicado para definir la apariencia de las páginas web y mejorar la experiencia del usuario con estilos visuales como colores, márgenes, y disposiciones.
- **PHP:** Empleado para la lógica del lado del servidor, manejando la interacción con la base de datos durante los procesos de registro e inicio de sesión de los usuarios.
- **MySQL:** Sistema de gestión de bases de datos relacional para almacenar y gestionar la información de los usuarios registrados de manera eficiente y segura.
- **mysqli:** Una extensión de PHP que proporciona una forma de interactuar con bases de datos MySQL. `mysqli` permite realizar operaciones de base de datos como consultas, inserciones, actualizaciones y borrados a través de PHP. Se utiliza en este proyecto para conectar la aplicación web con la base de datos MySQL, ejecutar consultas SQL y manejar los resultados. Ofrece tanto una interfaz orientada a objetos como una procedimental, y es compatible con características avanzadas de MySQL como las transacciones y las consultas preparadas, las cuales son esenciales para la seguridad y eficiencia de las aplicaciones web modernas.

---

## Estructura del Proyecto

### Archivos Principales

- **`index.php`:** Página de registro que permite a los nuevos usuarios ingresar su información personal para crear una cuenta.
- **`login.php`:** Página de inicio de sesión donde los usuarios pueden ingresar sus credenciales para acceder a su cuenta.
- **`registrar.php`:** Script PHP que procesa la información de registro enviada desde `index.php` y la almacena en la base de datos.
- **`iniciosesion.php`:** Script PHP que valida las credenciales de los usuarios enviadas desde `login.php` contra la información almacenada en la base de datos.
- **`conexion.php`:** Script PHP que establece la conexión con la base de datos MySQL.

### Archivos de Estilo

- **`style.css`:** Hoja de estilo CSS que define la apariencia de las páginas de registro e inicio de sesión.

### Directorio de Imágenes

- **`/images`:** Contiene los íconos utilizados en los campos de entrada de las páginas de registro e inicio de sesión.

## Cómo Funciona

1. **Registro de Usuarios:**
   - Los usuarios visitan `index.php` y llenan el formulario de registro.
   - Al enviar el formulario, `registrar.php` procesa la información, verifica que todos los campos estén completos y luego almacena los datos en la base de datos.
   - Se muestra un mensaje de éxito o error dependiendo del resultado de la operación.

2. **Inicio de Sesión de Usuarios:**
   - Los usuarios visitan `login.php` y llenan el formulario de inicio de sesión con su nombre de usuario y contraseña.
   - Al enviar el formulario, `iniciosesion.php` verifica las credenciales contra la base de datos.
   - Si las credenciales son correctas, se permite el acceso y se muestra un mensaje de bienvenida. De lo contrario, se muestra un mensaje de error.

## Seguridad

- Se recomienda utilizar consultas preparadas en PHP para evitar inyecciones SQL.
- Las contraseñas deben ser hasheadas antes de almacenarse en la base de datos para proteger la información de los usuarios.

## Consideraciones

Las sentencias preparadas, también conocidas como consultas parametrizadas, son una característica de los sistemas de gestión de bases de datos que permiten ejecutar sentencias SQL de manera más segura y eficiente. Estas sentencias funcionan separando la consulta SQL de los datos que se van a insertar, actualizar, seleccionar o borrar. En lugar de integrar directamente los datos en la consulta, se utilizan placeholders (marcadores de posición o parámetros) que luego se reemplazan con los datos reales antes de que la consulta se ejecute en la base de datos.

### Cómo Funcionan las consultas parametrizadas

El proceso de uso de sentencias preparadas se puede describir en los siguientes pasos:

1. **Preparación de la sentencia**: Se envía una consulta SQL al servidor de la base de datos, donde los valores que normalmente serían insertados directamente en la consulta se reemplazan con marcadores de posición. Por ejemplo, en lugar de una consulta como `INSERT INTO users (username, password) VALUES ('user', 'password')`, tendrías algo como `INSERT INTO users (username, password) VALUES (?, ?)`.

2. **Vinculación de parámetros**: Luego de preparar la consulta, los valores reales se vinculan a los marcadores de posición. Este paso se realiza sin necesidad de concatenar los valores dentro de la consulta, lo que evita el riesgo de inyección SQL.

3. **Ejecución de la consulta**: Finalmente, la consulta se ejecuta en el servidor de la base de datos. Dado que la consulta fue definida antes de que los valores fueran vinculados, el servidor de la base de datos puede tratar los valores vinculados exclusivamente como datos, sin interpretarlos como parte del SQL.

### Por qué las consultas parametrizadas evitan inyecciones SQL

Las sentencias preparadas evitan inyecciones SQL porque al separar los datos de la estructura de la consulta SQL, se elimina el riesgo de que los datos del usuario modifiquen la intención de la consulta mediante la inyección de SQL malicioso.
  
Además, los valores vinculados a la consulta se tratan siempre como datos, no como código SQL que pueda ser ejecutado. Esto significa que cualquier intento de inyectar SQL a través de los datos será tratado como una cadena de texto simple y no como parte del comando SQL.
  
Finalmente, las sentencias preparadas manejan automáticamente el escapado de caracteres especiales en los valores de los datos, reduciendo aún más la posibilidad de inyección SQL.

Gracias a estas características, las sentencias preparadas son consideradas una de las prácticas más efectivas en la protección contra las inyecciones SQL, ayudando a asegurar que las aplicaciones web sean más seguras y resistentes a este tipo de ataques.
