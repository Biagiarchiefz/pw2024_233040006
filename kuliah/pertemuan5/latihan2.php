<?php

$binatang = ["🦍","🐨","🦬","🐔","🐸","👻"];
$makanan = ["🥐","🍟","🌭","🍿","🍞"]
// echo $binatang[1];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Daftar $binatang</h3>
    <ol>
        <?php for ($i = 0; $i < count($binatang); $i++) { ?>
        <li><?php echo $binatang[$i]; ?></li>
        <?php } ?>
      
    </ol>


    <h3>Daftra makanan</h3>
    <ul>
    <?php for ($i = 0; $i < count($makanan); $i++) { ?>
        <li><?php echo $makanan[$i]; ?></li>
        <?php } ?>
      
    </ul>

    <h3>Daftar Bianatang</h3>
    <ol>
        <?php foreach($binatang as $b) { ?> 
            <li><?php echo $b; ?></li>
            <?php } ?>
    </ol>


    <h3>Daftar Makanan</h3>
    <ol>
    <?php foreach ($makanan as $b) : ?> 
            <li><? $b; ?></li>
            <?php endforeach; ?>

    </ol>
    
</body>
</html>
