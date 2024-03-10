<?php

// 1. membuat Array
$hari = array("senin","selasa","rabu");
$bulan = ["Januari","Februari","Maret"];
$mahasiswa = ["Biagi", 3.1, false];



// 2. mencetak isi Array
// Mencetak 1 nilai pada array, menggunakan index
// index dimulai dari 0
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $mahasiswa[1];
echo "<br>";


// Cetak semua isi array
// var_dump() atau print_r()
// digunakan saat debugging

var_dump ($hari);
echo "<br>";
print_r($bulan);
echo "<br>";






// 3. memanipulasi isi array
// Menambahkan isi array
// di akhir: [] atau array_push()
$hari[] ="Kamis";
$hari[] ="Jum'at";
print_r($hari);
echo "<br>";
array_push($bulan, "april", "Mei");
print_r($bulan);
echo "<br>";



// di awal: Array_ushift()
array_unshift($mahasiswa, "233040006");
print_r($mahasiswa);

echo "<hr>";

// MEnghapus isi array
// di belakang: array_pop()
// di depan: Array_shift()
array_pop($hari);
array_shift($bulan);
print_r($hari);
echo "<br>";
print_r($bulan);
