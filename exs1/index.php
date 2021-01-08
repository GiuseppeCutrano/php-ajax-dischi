<?php
require_once __DIR__ . '/database/db.php'
 ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Document</title>
</head>

<body>
    <header>
        <div class="container">
            <img  src="logo.png" alt="spotify">
        </div>
    </header>
    <main>
        <div class="cds-container">

            <?php 
        
        foreach ($albums['response'] as $album) {
            ?>

            <div class="cd">

                <div><img src="<?php echo $album['poster'];?>" alt=""></div>
                <div class="title"> <?php echo $album['title']?>;</div>
                <div class="author"><?php echo $album['author']?>;</div>
                <div class="genre"><?php echo $album['genre']?>;</div>
                <div class="year"><?php echo $album['year']?>;</div>

            </div>
            <?php
        };
        ?>

        </div>


    </main>
    <footer>

    </footer>
</body>

</html>