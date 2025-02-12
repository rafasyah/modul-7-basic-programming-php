<?php

$jam_kerja = 210;
$jabatan =  1 ;

if($gaji <= 3000000) {
    $pajak = 5;
}
elseif ($gaji>= 300000 && $gaji <= 5000000){
    $pajak=10;
    }
elseif ($gaji > 5000000 ) {
    $pajak = 15;
} 

if ($jabatan = 1) {
    $jabatan = "manager";
 }
 else if ($jabatan = 2) {
     $jabatan = "supervisor";
  }
  else if ($jabatan = 3) {
     $jabatan = "staff";
  }
if ($jam_kerja > 200){
    $bonus = ($jam_kerja - 200) * 20000;
}else{
    $bonus = 0;
}
  
  if ($jabatan == "manager") {
    $gaji = 7000000;
}elseif ($jabatan == "supervisor") {
    $gaji = 5000000;
}elseif ($jabatan == "staff") {
    $gaji = 3000000;
}

 
$persenan = $pajak / 100 ;
$total_pajak = $gaji *$persenan;
$gaji_bersih = $gaji - $pajak + $bonus;

function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
 
};
echo "jabatan : $jabatan <br>";
echo "gaji pokok :" . rupiah($gaji). "<br>";
echo "pajak:" . rupiah($total_pajak). "<br>";
echo "bonus :" . rupiah($bonus). "<br>";
echo "gaji bersih :" . rupiah($gaji_bersih). "<br>";