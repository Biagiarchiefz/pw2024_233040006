<?php
$komponen =['Motherboard','Processor','Hard Disk','PC Coller','VGA Card','SSD'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS 4B- KOMPONEN KOMPUTER</title>
</head>
<body>
    
    <h3><b>Macam-Macam Perangkat Keras Komputer</b></h3>
    <ol>
        <?php foreach ($komponen as $components) : ?>
            <li> <?=$components; ?> </li>
            <?php endforeach; ?>
    </ol>

    <hr>

    <h3><b>Macam-Macam Perangkat Keras Komputer Baru</b></h3>
    <ol>
        <?php array_push ($komponen, 'Card Reader','Modem'); ?>
        <?php sort ($komponen) ?>
        <?php foreach ($komponen as $componentnews) : ?>
            <li> <?=$componentnews; ?> </li>
            <?php endforeach; ?>
    </ol>
    
</body>
</html>