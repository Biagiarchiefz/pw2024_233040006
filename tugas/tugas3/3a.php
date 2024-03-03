<?php

echo "<h4>Menghitung Luas Lingkaran</h4>";
function hitungLuasLingkaran($r) {
    echo "Jari-jari = $r cm";
    echo "<br>";
    echo "Luas lingkaran = " . (3.14 * $r * $r) . "cm²";
    
}
hitungLuasLingkaran(10);
echo "<hr>";

echo "<h4>Menghitung Keliling Lingkaran</h4>";
function hitungKelilingLingkaran($r) {
    echo "Jari-jari = $r cm";
    echo "<br>";
    echo "Keliling Lingkaran = " . (2 * 3.14 * $r) . "cm";
}
hitungKelilingLingkaran(20);
echo "<hr>";