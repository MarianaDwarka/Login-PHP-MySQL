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

Este proyecto es un ejemplo básico y requiere mejoras de seguridad antes de ser utilizado en un entorno de producción. Se recomienda implementar medidas de seguridad adicionales y validación de datos en el lado del servidor.

