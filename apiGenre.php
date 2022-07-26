<?php 
    require __DIR__ . '/dataBaseGenre.php';

    header ('Content-Type: application/json');
    echo json_encode($songGenre);
?>