<?php
$total_belanja = 1000;

// jika belanja lebih dari 1000, maka selamat anda mendapat diskon 500
// selainnya anda : tidak dapat diskon

echo"total belanja anda  $total_belanja";

if($total_belanja >=1000) {
    echo " Selamat anda mendapat diskon 500<br><br>";
}else {
    echo "Anda tidak mendapat diskon";
}

// ===================================

$hari="senin";
if($hari== "senin"){
    echo "Mengunakan Seragam Putih Abu";
}else if($hari == "selasa"){
    echo"Mengunakan Seragam Pramuka";
}else if($hari == "Rabu"){
    echo"Mengunakan Seragam Produktif";
}else if($hari == "Kamis"){
    echo"Mengunakan Seragam Batik";
}else if($hari == "Jumat"){
    echo"Mengunakan Seragam Gamis";
}
