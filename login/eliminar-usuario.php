<?php
session_start();

// Verificar si hay una sesión iniciada
if (!isset($_SESSION["nombre"])) {
    header("location: index.php");
    exit;
}

// Incluir archivo de conexión
include 'conexion.php';

// Verificar si se recibió un ID de usuario válido
if (isset($_GET['id'])) {
    $id_usuario = intval($_GET['id']);

    // Preparar la consulta SQL para eliminar el usuario
    $sql = "DELETE FROM usuarios WHERE id = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("i", $id_usuario);

    // Ejecutar la consulta y verificar si se eliminó correctamente
    if ($stmt->execute()) {
        // Redirigir al dashboard con un mensaje de éxito
        header("location: dashboard1.php?message=Usuario eliminado correctamente");
        exit;
    } else {
        // Mostrar un mensaje de error si la eliminación falla
        echo "Error al eliminar el usuario: " . $stmt->error;
    }

    // Cerrar la consulta y la conexión
    $stmt->close();
    $conexion->close();
} else {
    // Redirigir al dashboard si no se recibe un ID válido
    header("location: dashboard1.php?error=ID de usuario inválido");
    exit;
}
?>
