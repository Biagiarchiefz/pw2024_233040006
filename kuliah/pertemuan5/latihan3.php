<?php
$mahasiswa = [
    ["Biagi", "233040006", "Teknik Informatika", "biagi@gmail.com"],
    ["Parjamban", "233040015", "Teknik Informatika", "parjo@gmail.com"],
    

];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach ($mahasiswa as $m) : ?>

<ul>

<li><?= $m[0]; ?></li>
<li><?= $m[1]; ?></li>
<li><?= $m[2]; ?></li>
<li><?= $m[3]; ?></li>


</ul>

<?php endforeach; ?>
    
</body>
</html>