<?php
// $_GET

$mahasiswa = [
    [
    "nama" => "Biagi",
    "npm" => "233040006",
    "jurusan" => "Teknik Informatika",
    "email" => "biagi@gmail.com",
    "gambar" => "angg1.png"
    ],
    [
        "nama" => "Madara",
        "npm" => "233040017",
        "jurusan" => "Teknik Informatika",
        "email" => "ArahArah@gmail.com",
        "gambar" => "angg2.png"
    ]

];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

<ul>
    <?php foreach($mahasiswa as $mhs) : ?>

        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&npm=<?=$mhs["npm"]; ?>&jurusan=<?= $mhs ["jurusan"]; ?>&email=<?= $mhs ["email"]; ?>&gambar=<?= $mhs ["gambar"];?>">
            <?=$mhs ["nama"]?></a>
            
        </li>

        <?php endforeach; ?>
</ul>

</body>
</html>