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
    ],
    [
        "nama" => "Saske",
        "npm" => "233040018",
        "jurusan" => "Teknik Informatika",
        "email" => "Saske@gmail.com",
        "gambar" => "ang2.png"
    ],
    [
        "nama" => "Narto",
        "npm" => "233040019",
        "jurusan" => "Teknik Informatika",
        "email" => "Narto@gmail.com",
        "gambar" => "ang2.png"
    ],
    [
        "nama" => "Miranda",
        "npm" => "233040020",
        "jurusan" => "Teknik Informatika",
        "email" => "Miranda@gmail.com",
        "gambar" => "ang2.png"
    ],
    [
        "nama" => "Murtad",
        "npm" => "233040021",
        "jurusan" => "Teknik Informatika",
        "email" => "Murtad@gmail.com",
        "gambar" => "ang2.png"
    ],
    [
        "nama" => "Madun",
        "npm" => "233040022",
        "jurusan" => "Teknik Informatika",
        "email" => "Madun@gmail.com",
        "gambar" => "ang2.png"
    ],
    [
        "nama" => "Murod",
        "npm" => "233040023",
        "jurusan" => "Teknik Informatika",
        "email" => "Mrod@gmail.com",
        "gambar" => "ang2.png"
    ],
    [
        "nama" => "Ibrahim",
        "npm" => "233040024",
        "jurusan" => "Teknik Informatika",
        "email" => "Ahimh@gmail.com",
        "gambar" => "ang2.png"
    ],
    [
        "nama" => "Zaki",
        "npm" => "233040025",
        "jurusan" => "Teknik Informatika",
        "email" => "Zak@gmail.com",
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