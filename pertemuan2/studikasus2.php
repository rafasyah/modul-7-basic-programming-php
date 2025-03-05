<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  <style type="text/tailwindcss">
 
  </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <?php

$jam_kerja = "";
$jabatan = "" ;
$gaji = "";


if(isset ($_POST ['jabatan']) && isset($_POST ['jamkerja']) ){


$jam_kerja = $_POST['jabatan'];
$jabatan = $_POST['jamkerja'];

}




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
$total_pajak = $gaji * $persenan;
$gaji_bersih = $gaji - $pajak + $bonus;

function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;   
 
};
?>
<div class="bg-white p-8 rounded-lg shadow-lg w-96 ">
    <h2 class="text-2x1 font-semibold text-center mb-5">form input nilai siswa</h2>

    <form action="" method="POST">
        <p>Jabatan</p>
      <input type="text" name="jabatan" class="w-full p-3 mb-4 border border-gray-300 rounded-md " 
      autocomplete="off" >
      <p>Jam Kerja</p>
      <input type="text" name="jamkerja" class="w-full p-3 mb-4 border border-gray-300 rounded-md " 
      autocomplete="off" value= >

      <input type="submit" name="hitung" value="hitung" class="w-full p-3 mb-4 border border-gray-300 rounded-md bg-blue-300 text-white " >

      <tbody>
    <tr >
      <td class="p-4 "><?php echo $gaji_bersih ?></td>
      <td class="p-4"><?php  echo $jam_kerja    ?></td>
    
    </tr>
   
   
  </tbody>

    </form>

