<?php

echo "<br>";
$namadepan = "Biagi";
$namabelakang = "Archie Fais";
 
for( $i= 1; $i <= 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
       echo "$namadepan $namabelakang<br>";
       

    } elseif ($i % 3 === 0 ) {
        echo "$namadepan <br>";

     } elseif ($i % 5 === 0) {
        echo "$namabelakang<br>";

     } else {
        echo "$i <br>";
     }
    
        
      
}
