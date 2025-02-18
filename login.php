<?php
session_start();

// Si ya está logueado, redirigir a la página principal
if (isset($_SESSION['user'])) {
    header('Location: index.php');
    exit;
}

// Verificar las credenciales del usuario
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'], $_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Usuario de prueba (admin/admin)
    if ($username === 'admin' && $password === 'admin') {
        $_SESSION['user'] = $username;
        header('Location: index.php');
        exit;
    } else {
        $error = "Credenciales incorrectas";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
</head>
<body>

<h2>Iniciar sesión</h2>
<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
<form method="POST">
    <input type="text" name="username" placeholder="Usuario" required>
    <input type="password" name="password" placeholder="Contraseña" required>
    <button type="submit">Iniciar sesión</button>
</form>

</body>
</html>
