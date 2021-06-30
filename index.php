<?php include __DIR__ . '/database.php'; ?>
<?php include __DIR__ . '/header.php'; ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/style.css">
        <title>Document</title>
    </head>
    <body>
        <?php 'header.php'; ?>
        
        <div class="dischi">
            <div class="container">
                <?php 
                foreach ($dischi as $key => $disco) {
                    # code...
                    ;?>
            <div class="dischi_container">
            <img src= "<?php echo $dischi[$key]['copertina']; ?>">
            <p class="title"> <?php echo $dischi[$key]['titolo']; ?></p>
            <p class="author"><?php echo $dischi[$key]['autore']; ?></p>
            <p class="date"><?php echo $dischi[$key]['anno']; ?>
            </p>
            </div>
            
            <?php
            }
            ;?>
            </div>
        </div>
    </body>
</html>