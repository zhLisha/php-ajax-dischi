<?php 
    // Imported Disk Array
    require __DIR__ . '../../database.php';
    include __DIR__ . '../../dataBaseGenre.php';
?>

<main>
    <div class="container">

        <ul class="flex" >
            <?php foreach($disk as $music) { ?>

                <!-- <?php 
                    $filter = $_GET['genre'] ;
                ?>

                <?php  if($filter = 'All Genre') { ?> -->
                    <li class="card">
                        <!-- Thumb -->
                        <div class="img-album">
                            <img src="<?php echo $music['poster']; ?>" alt="">
                        </div>

                        <!-- Title Album -->
                        <div class="title-album">
                            <h3>
                                <?php echo $music['title'] ?>
                            </h3>
                        </div>
                        
                        <!-- Other Detailes About the Album -->
                        <div class="other-album-detailes">

                            <!-- Author -->
                            <div class="author-album">
                                <span>
                                    <?php echo $music['author'] ?> 
                                </span>
                            </div>

                            <!-- Year Of Release -->
                            <div class="year-release-album">
                                <span>
                                    <?php echo $music['year'] ?> 
                                </span>
                            </div>
                        </div>
                    </li>
                <!-- <?php } ?> -->

            <? } ?>
        </ul>
    </div>
</main>