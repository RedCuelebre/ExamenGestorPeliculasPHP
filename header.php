<?php
// header.php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streaming Platform</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php if (isset($_SESSION['user'])): ?>
    <nav>
        <ul>
            <li>Bienvenido, <?php echo htmlspecialchars($_SESSION['user']); ?></li>
            <li><a href="logout.php">Cerrar sesión</a></li>
        </ul>
    </nav>
<?php endif; ?>
