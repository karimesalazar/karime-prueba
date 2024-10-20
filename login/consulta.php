<?php
include_once("conexion.php");

$query = mysqli_query($conexion, "SELECT COUNT(*) AS total FROM `usuarios`");

// Obtener el número total de registros
$row = mysqli_fetch_assoc($query);
$total_registered = $row['total'];

// Usuarios por direccion

$query = mysqli_query($conexion, "SELECT COUNT(*) AS total_medrano FROM `usuarios` WHERE `direccion` = 'medrano'");

// Obtener el resultado
$row = mysqli_fetch_assoc($query);
$total_medrano = $row['total_medrano'];

$query = mysqli_query($conexion, "SELECT COUNT(*) AS total_porvenir FROM `usuarios` WHERE `direccion` = 'porvenir'");

// Obtener el resultado
$row = mysqli_fetch_assoc($query);
$total_porvenir = $row['total_porvenir'];

$query = mysqli_query($conexion, "SELECT COUNT(*) AS total_Valparaiso FROM `usuarios` WHERE `direccion` = 'Valparaiso'");

// Obtener el resultado
$row = mysqli_fetch_assoc($query);
$total_Valparaiso = $row['total_Valparaiso'];

?>