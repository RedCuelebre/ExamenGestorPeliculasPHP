<?php
session_start();

// Incluir el archivo de funciones
require_once('movie_functions.php');  // Asegúrate de que la ruta es correcta

// Verificar si el usuario está autenticado
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

require_once('header.php');
require_once('movie_form.php');
require_once('footer.php');

// Comprobar si se ha enviado el formulario para agregar una película
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['title'], $_POST['description'])) {
    $movies = load_movies();
    $movies[] = [
        'title' => htmlspecialchars($_POST['title']),
        'description' => htmlspecialchars($_POST['description'])
    ];
    save_movies($movies);
    header("Location: {$_SERVER['PHP_SELF']}"); // Redirigir para evitar el reenvío del formulario
    exit;
}
?>


