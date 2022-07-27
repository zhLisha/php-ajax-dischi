<?php 
    require __DIR__ . '/database.php';

    // var_dump($_GET['genre']);

    if($_GET['genre'] === 'All') {
        header ('Content-Type: application/json');
        echo json_encode($disk);
    } 
    else {
            $songGenre = [];
            foreach($disk as $musicGenre) { 
                
                if($musicGenre['genre'] == $_GET['genre']) {
                    $songGenre[] = $musicGenre;
                }; 
            } ;
            // return $songGenre;
            header ('Content-Type: application/json');
            echo json_encode($songGenre);
        }
?>