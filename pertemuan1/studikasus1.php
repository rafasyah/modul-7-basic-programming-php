<?php

$gaji = 16000000;
$status = "kontrak";

if ($gaji >= 15000000  ) {
    $pajak = 20;
} elseif ( $gaji >= 10000000 && $gaji <= 15000000  ) {
    $pajak = 15;
} elseif ( $gaji >= 5000000 && $gaji <= 10000000  ) {
    $pajak = 10;
} elseif ( $gaji < 5000000 ) {
    $pajak = 5;
}

if ($status == "tetap") {
    $pajak = $pajak + 5 ;
}else {
    $pajak = $pajak + 0;
}

if ($jabatan = 1) {
   $jabatan = "manager";
}
if ($jabatan = 2) {
    $jabatan = "supervisor";
 }
 if ($jabatan = 3) {
    $jabatan = "staff";
 }


$persenan = $pajak / 100 ;
$potongan = $gaji * $persenan;
$gaji_bersih = $gaji - $pajak + $bonus;

echo "Gaji Bulanan = Rp. " .$gaji . "<br>";
echo "Status Pegawai =" . $status .  "<br>";
echo "Pajak = " . $pajak ."%<br>";
echo "Potongan Pajak =Rp. " .$potongan . "<br>" ;
echo "Gaji Bersih =Rp. " . $gaji_bersih . "<br>";
       
    

   
 
