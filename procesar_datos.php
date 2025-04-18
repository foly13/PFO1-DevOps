<?php
// Obtener datos enviados por POST
$usuario = $_POST['usuario'] ?? '';
$contrasena = $_POST['contrasena'] ?? '';

// Validación simple
if (!empty($usuario) && !empty($contrasena)) {
    // Simulamos una validación exitosa
    $response = [
        'status' => 'ok',
        'message' => 'Datos recibidos correctamente'
    ];
} else {
    $response = [
        'status' => 'error',
        'message' => 'Faltan datos'
    ];
}

// Devolver respuesta en formato JSON
header('Content-Type: application/json');
echo json_encode($response);
?>