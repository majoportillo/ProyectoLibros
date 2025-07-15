<?php
$conexion = new mysqli("localhost", "root", "", "infinitybooks");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (
        !empty($_POST['correo']) &&
        !empty($_POST['contraseña']) &&
        !empty($_POST['edad']) &&
        !empty($_POST['genero'])
    ) {
        $correo = $conexion->real_escape_string($_POST['correo']);
        $password = $_POST['contraseña'];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $edad = (int) $_POST['edad'];
        $genero = $conexion->real_escape_string($_POST['genero']);

        $verifica = "SELECT id FROM usuarios WHERE correo = '$correo'";
        $resultado = $conexion->query($verifica);

        if ($resultado && $resultado->num_rows > 0) {
            echo "❌ Este correo ya está registrado.";
        } else {
            $sql = "INSERT INTO usuarios (correo, contraseña, edad, genero)
                    VALUES ('$correo', '$hashed_password', $edad, '$genero')";
            if ($conexion->query($sql) === TRUE) {
                echo "✅ Cuenta creada correctamente.";
                header("Refresh:2; url=iniciar_sesion.html");
                exit();
            } else {
                echo "❌ Error al crear cuenta: " . $conexion->error;
            }
        }
    } else {
        echo "❌ Todos los campos son obligatorios.";
    }
} else {
    echo "❌ Acceso no permitido.";
}
?>

