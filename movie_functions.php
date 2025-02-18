<?php
define('DATA_FILE', 'data/movies.json');

function load_movies() {
    if (!file_exists(DATA_FILE)) {
        return [];
    }
    $json = file_get_contents(DATA_FILE);
    return json_decode($json, true) ?: [];
}

function save_movies($movies) {
    file_put_contents(DATA_FILE, json_encode($movies, JSON_PRETTY_PRINT));
}
?>
