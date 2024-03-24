 <?php
$mahasiswa = [
    [
    "nama" => "Biagi",
    "npm" => "233040006",
    "jurusan" => "Teknik Informatika",
    "email" => "biagi@gmail.com",
    "gambar" => "ang1.png"
    ],
    [
        "nama" => "Madara",
        "npm" => "233040017",
        "jurusan" => "Teknik Informatika",
        "email" => "ArahArah@gmail.com",
        "gambar" => "ang2.png"
    ]

];?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach ($mahasiswa as $mhs) : ?>

<ul>

<li>
    <img src="img/<?= $mhs ["gambar"]?>" alt=""></li>
<li>Nama :<?= $mhs["nama"] ; ?></li>
<li>Npm :<?= $mhs["npm"]; ?></li>
<li>jurusan :<?= $mhs["jurusan"]; ?></li>
<li>Email :<?= $mhs["email"]; ?></li>


</ul>

<?php endforeach; ?>

    
</body>
</html>