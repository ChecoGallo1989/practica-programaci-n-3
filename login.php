<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="style.css">
    
  
</head>
<body>



<?php



$db_host = "localhost";
$db_nombre = "registroformulario";
$db_usuario = "root";
$db_contra = "";
$port = 3306;

// Crear conexión
$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre, $port);

// Verificar conexión
if (mysqli_connect_errno()) {
    die("Fallo al conectar con la base de datos: " . mysqli_connect_error());
}

// Verificar si se enviaron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consultar la base de datos para verificar si el email existe y la contraseña coincide
    $consulta = "SELECT * FROM registro WHERE email = ?";
    $stmt = $conexion->prepare($consulta);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        
        if ($fila['contraseña'] === $password) {
            // Mostrar información del usuario
            echo "<h2>Bienvenido, " . $fila['nombre'] . " " . $fila['apellido'] . "</h2>";
            echo "<p>Email: " . $fila['email'] . "</p>";
        } else {
            // Contraseña incorrecta
            echo "<script>alert('La contraseña es incorrecta. Por favor, inténtelo de nuevo.'); window.location.href = 'login.html';</script>";
        }
    } else {
        // Email no existe
        echo "<script>alert('El email no existe en la base de datos. Por favor, regístrese.'); window.location.href = 'login.html';</script>";
    }

    // Cerrar la conexión
    $stmt->close();
    mysqli_close($conexion);
}
?>

</body>
</html>
