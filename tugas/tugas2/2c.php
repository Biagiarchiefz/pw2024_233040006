<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 2c</title>
</head>
<style>
    .warna-kolom {
    width: 20px;
    height: 20px;
    background-color: red;
    border: 1px solid black;
    }
    </style>
<body>
    <table border="0" cellpadding="20" cellspacing ="0">
<?php for ($i = 10; $i >= 1; $i--) : ?>
    <tr>
        <?php for ($j = 1; $j <= $i; $j++ ) : ?>
            <td class="warna-kolom"><?= " $j  "; ?></td>
            <?php endfor ; ?>
</tr>
<?php endfor; ?>


</table>
</body>
</html>
