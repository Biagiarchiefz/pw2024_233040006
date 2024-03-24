<?php 
//array


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>

    .kotak{
        width: 50px;
        height: 50px;
        background-color: salmon;
        float: left;
        text-align: center;
        line-height: 50px;
        transition: 1s;
        margin : 5px;

    }

    .kotak:hover {
        transform: rotate(360deg);
        border-radius: 50%;
    }

    .clear {
        clear: both;
    }


</style>

</head>
<body>
    
     <?php $angka = [
     [1,2,3],
     [4,5,6],
     [7,8,9]
     ]; ?>


 
     <?php foreach ($angka as $ang) : ?>
        <?php foreach ($ang as $a)  : ?>
         <div class="kotak"><?= $a ?></div>
         <?php endforeach ?>

         <div class="clear"></div>

    <?php endforeach ?>
</body>
</html>