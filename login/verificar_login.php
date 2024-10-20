<?php

// Conexión a la base de datos
$db = new mysqli("localhost", "root", "", "pqr");

// Validar si la conexión fue exitosa
if ($db->connect_error) {
    die('Error de conexión: ' . $db->connect_error);
}

// Iniciar sesión
session_start();

// Recibir datos del formulario de registro
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Consulta SQL para autenticar al usuario y obtener el nombre
$sql = "SELECT nombre, correo, contrasena, rol FROM usuarios WHERE correo = '$correo'";
$resultado = $db->query($sql);

// Validar si el usuario existe
if ($resultado->num_rows == 1) {
    $usuario = $resultado->fetch_assoc();

    // Obtener el hash de la contraseña almacenada
    $hashedPassword = $usuario['contrasena'];

    // Verificar la contraseña ingresada
    if (password_verify($contrasena, $hashedPassword)) {
        // Inicio de sesión exitoso
        // Verificar el rol del usuario
        if ($usuario['rol'] == 'admin') {
            // Redireccionar al panel de administrador
            header('Location:dashboard.php');

            // Almacenar variables de sesión
            $_SESSION['correo'] = $usuario['correo'];
            $_SESSION['rol'] = $usuario['rol'];
            $_SESSION['nombre'] = $usuario['nombre']; // Almacenar el nombre
        } else {
            // Redireccionar a la página PQRS interfaz usuario
            header('Location:inicio.php');

            // Almacenar variables de sesión
            $_SESSION['correo'] = $usuario['correo'];
            $_SESSION['rol'] = $usuario['rol'];
            $_SESSION['nombre'] = $usuario['nombre']; // Almacenar el nombre
        }
    } else {
        // Contraseña incorrecta
           echo '<p>Usuario o contraseña incorrectos.</p>';
    }
} else {
    // Usuario no encontrado
    echo '<p>Usuario no encontrado.</p>';
}

// Cerrar la conexión a la base de datos
$db->close();

?>
