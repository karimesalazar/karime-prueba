<?php
session_start(); // Inicia una nueva sesión o reanuda la sesión existente

// Verificar si hay una sesión iniciada
if (!isset($_SESSION["nombre"])) {
    // Si no hay una sesión iniciada, redirige al usuario a la página de inicio de sesión
    header("location: index.php");
    exit; // Termina la ejecución del script
}

// Incluir archivo de conexión a la base de datos
include 'conexion.php';

// Verificar si el formulario ha sido enviado mediante el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener y limpiar los datos enviados desde el formulario
    $id = intval($_POST["id"]); // Obtener y limpiar el ID
    $nombre = htmlspecialchars($_POST["nombre"]); // Escapar caracteres especiales para evitar XSS
    $correo = htmlspecialchars($_POST["correo"]); // Escapar caracteres especiales para evitar XSS
    $contrasena = password_hash($_POST["contrasena"], PASSWORD_BCRYPT); // Encriptar la contraseña usando BCRYPT
    $direccion = htmlspecialchars($_POST["direccion"]); // Escapar caracteres especiales para evitar XSS
    $telefono = htmlspecialchars($_POST["telefono"]); // Escapar caracteres especiales para evitar XSS

    // Preparar la consulta SQL para insertar un nuevo usuario en la base de datos
    $sql = "INSERT INTO usuarios (id, nombre, correo, contrasena, direccion, telefono) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conexion->prepare($sql); // Preparar la consulta SQL
    $stmt->bind_param("isssss", $id, $nombre, $correo, $contrasena, $direccion, $telefono); // Vincular parámetros a la consulta SQL

    // Ejecutar la consulta y verificar si se insertó el usuario correctamente
    if ($stmt->execute()) {
        // Redirigir al usuario a la página de lectura con un mensaje de éxito
        header("location: dashboard1.php?message=Usuario creado correctamente");
        exit; // Termina la ejecución del script
    } else {
        // Mostrar un mensaje de error si la inserción falla
        echo "Error al crear el usuario: " . $stmt->error;
    }

    // Cerrar la consulta preparada y la conexión a la base de datos
    $stmt->close();
    $conexion->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Usuario</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url(images1.png) no-repeat;
            background-size: cover;
            background-position: center;
        }
        .tuclase {
            text-align: justify;
            font-family: Arial;
            font-size: 20px;
            color: #eb58a4;
            text-shadow: 0px 0px 9px #d35084;
        }
        form {
            width: 420px;
            background: rgba(255, 255, 255, 0.1);
            border: 3px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(20px);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            color: #333;
            border-radius: 10px;
            padding: 30px 40px;
            position: relative;
            overflow: hidden;
        }
        form::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(to bottom right, #ffcccc, #ccffff);
            filter: blur(10px);
            z-index: -1;
        }
        form h2 {
            font-size: 36px;
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        .input-wrapper {
            position: relative;
            width: 100%;
            height: 50px;
            margin: 30px 0;
        }
        .input-wrapper input {
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            border: 2px solid rgba(0, 0, 0, 0.2);
            border-radius: 40px;
            padding: 0 20px;
            font-size: 16px;
            color: #333;
        }
        .input-wrapper input::placeholder {
            color: #333;
        }
        .input-wrapper i {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 20px;
            color: #333;
        }
        .btn {
            width: 100%;
            height: 45px;
            background: #eb58a4;
            border: none;
            outline: none;
            border-radius: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            font-size: 16px;
            color: #fff;
            margin-bottom: 20px;
        }
        .btn:hover {
            background: #555;
        }
        .register-link p a {
            color: #333;
            text-decoration: none;
            font-weight: 600;
        }
        .register-link p a:hover {
            text-decoration: underline;
        }
        .desenfocado {
            text-align: center;
            font-family: Arial Black;
            font-weight: bold;
            font-size: 30px;
            color: rgba(255, 255, 255, 0);
            color: #eb58a4;
            text-shadow: 0 0 9px;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <h2>Crear Usuario</h2>
        <div class="input-wrapper">
            <input type="text" id="id" name="id" placeholder="ID" required>
        </div>
        <div class="input-wrapper">
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
        </div>
        <div class="input-wrapper">
            <input type="email" id="correo" name="correo" placeholder="Correo" required>
        </div>
        <div class="input-wrapper">
            <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" required>
        </div>
        <div class="input-wrapper">
            <input type="text" id="direccion" name="direccion" placeholder="Dirección" required>
        </div>
        <div class="input-wrapper">
            <input type="text" id="telefono" name="telefono" placeholder="Teléfono" required>
        </div>
        <input type="submit" class="btn" value="Crear">
    </form>
</body>
</html>
