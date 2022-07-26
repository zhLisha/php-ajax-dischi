<?php include __DIR__ . '/database.php'; ?>

<?php 
 $songGenre = [];
foreach($disk as $musicGenre) { 
       
        if(!in_array($musicGenre['genre'], $songGenre)) {
            $songGenre[] = $musicGenre['genre'];
        }; 
    } ;
    return $songGenre;
?>

