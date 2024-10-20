<?php
session_start();

// Verificar si hay una sesión iniciada
if (!isset($_SESSION["nombre"])) {
    header("location: index.php");
    exit;
}

// Incluir archivo de conexión
include 'conexion.php';

// Verificar si se ha recibido un ID de usuario válido
if (isset($_GET['id'])) {
    $id_usuario = intval($_GET['id']);

    // Preparar la consulta SQL para obtener los datos del usuario
    $sql = "SELECT id, nombre, correo, contrasena, direccion, telefono FROM usuarios WHERE id = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("i", $id_usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verificar si se encontró el usuario
    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
    } else {
        echo "No se encontró el usuario.";
        exit;
    }

    // Cerrar la consulta
    $stmt->close();
} else {
    echo "ID de usuario inválido.";
    exit;
}

// Verificar si se ha enviado el formulario de edición
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir y limpiar los datos del formulario
    $id = intval($_POST["id"]);
    $nombre = htmlspecialchars($_POST["nombre"]);
    $correo = htmlspecialchars($_POST["correo"]);
    $contrasena = htmlspecialchars($_POST["contrasena"]);
    $direccion = htmlspecialchars($_POST["direccion"]);
    $telefono = htmlspecialchars($_POST["telefono"]);

    // Preparar la consulta SQL para actualizar el usuario
    $sql = "UPDATE usuarios SET nombre = ?, correo = ?, contrasena = ?, direccion = ?, telefono = ? WHERE id = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sssssi", $nombre, $correo, $contrasena, $direccion, $telefono, $id);

    // Ejecutar la consulta y verificar si se actualizó correctamente
    if ($stmt->execute()) {
        header("location: dashboard1.php?message=Usuario actualizado correctamente");
        exit;
    } else {
        echo "Error al actualizar el usuario: " . $stmt->error;
    }

    // Cerrar la consulta y la conexión
    $stmt->close();
    $conexion->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
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
        <h2>Editar Usuario</h2>
        <div class="input-wrapper">
            <input type="text" id="id" name="id" value="<?php echo $usuario['id']; ?>" readonly>
        </div>
        <div class="input-wrapper">
            <input type="text" id="nombre" name="nombre" value="<?php echo $usuario['nombre']; ?>" required>
        </div>
        <div class="input-wrapper">
            <input type="email" id="correo" name="correo" value="<?php echo $usuario['correo']; ?>" required>
        </div>
        <div class="input-wrapper">
            <input type="password" id="contrasena" name="contrasena" placeholder="Nueva Contraseña">
        </div>
        <div class="input-wrapper">
            <input type="text" id="direccion" name="direccion" value="<?php echo $usuario['direccion']; ?>" required>
        </div>
        <div class="input-wrapper">
            <input type="text" id="telefono" name="telefono" value="<?php echo $usuario['telefono']; ?>" required>
        </div>
        <input type="submit" class="btn" value="Actualizar">
    </form>
</body>
</html>
