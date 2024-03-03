<?php
// sisi kubus a = 9, sisi kubus b = 4
// $sisi_a = 9;
// $sisi_b = 6;
// $sisi = $sis_avolume_16a = VOLUME 
// Nama 

function total_volume_dua_kubus($a, $b){
    $volume_a = $a * $a * $a;
    $volume_b = $b * $b * $b;
    $total = $volume_a + $volume_b;


    return $total;
}

echo "total volume kubus A & B =" . total_volume_dua_kubus(9, 4);