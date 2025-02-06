<?php

echo"studi kasus";
echo "<hr>";

$gaji="13000000";
$status="tetap";
$persen= ($pajak / 100);
$potongan= $gaji * $pajak;

  if ($gaji >= 15000000) {
        $pajak = 20;
    } elseif ($gaji >= 10000000) {
        $pajak = 15;
    } elseif ($gaji >= 5000000) {
        $pajak = 10;
    } else {
        $pajak = 5;
    }

    echo "-----rincian pajak----";
    echo "Gaji Bulanan $gaji";

       
    

   
 
