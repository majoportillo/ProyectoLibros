<?php
session_start();

$conexion = new mysqli("localhost", "root", "", "infinitybooks");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['correo']) && !empty($_POST['contraseña'])) {
        $correo = $conexion->real_escape_string($_POST['correo']);
        $password = $_POST['contraseña'];

        $sql = "SELECT * FROM usuarios WHERE correo = '$correo' LIMIT 1";
        $resultado = $conexion->query($sql);

        if ($resultado && $resultado->num_rows === 1) {
            $usuario = $resultado->fetch_assoc();

            // Si usas contraseña hasheada:
            if (password_verify($password, $usuario['contraseña'])) {
                $_SESSION['usuario_id'] = $usuario['id'];
                $_SESSION['usuario_correo'] = $usuario['correo'];
                header("Location: principal.php");
                exit();
            } else {
                echo "❌ Contraseña incorrecta.";
            }

            // Si usas texto plano, cambia arriba por esta línea:
            // if ($usuario['contraseña'] === $password) { ... }
        } else {
            echo "❌ Usuario no encontrado.";
        }
    } else {
        echo "❌ Todos los campos son obligatorios.";
    }
} else {
    echo "❌ Acceso inválido.";
}
?>
