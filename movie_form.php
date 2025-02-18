<!-- movie_form.php -->
<!-- Formulario para agregar nuevas películas -->
<div class="movie-form">
    <form method="POST">
        <input type="text" name="title" placeholder="Título" required>
        <textarea name="description" placeholder="Descripción" required></textarea>
        <button type="submit">Agregar Película</button>
    </form>
</div>

<!-- Listado de películas -->
<div id="movie-list">
    <?php
    // Mostrar películas
    $movies = load_movies();
    if (!empty($movies)) {
        foreach ($movies as $movie) {
            echo '<div class="movie">';
            echo '<h2>' . htmlspecialchars($movie['title']) . '</h2>';
            echo '<p>' . htmlspecialchars($movie['description']) . '</p>';
            echo '</div>';
        }
    } else {
        echo '<p>No hay películas disponibles.</p>';
    }
    ?>
</div>

<script>
    // Reiniciar el formulario después de agregar la película
    window.onload = function() {
        const form = document.querySelector('form');
        form.reset();  // Limpiar el formulario si la página se recarga después de enviar
    };
</script>