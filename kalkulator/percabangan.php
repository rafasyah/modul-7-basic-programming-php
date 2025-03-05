<?php


$jabatan = "";
$jam_kerja = ""; //200
//jam lembur total - 200 = 300

if(isset ($_POST ['namasiswa']) && isset($_POST ['nilaitugas']) && isset($_POST['nilaiuts']) && isset ($_POST['nilaiuas'])){

    $jabatan = $_POST['jabatan'];
    $jam_kerja = $_POST['jamkerja'];
}
if ($jabatan == "manager") {
    $gaji = 7000000;
} elseif ($jabatan == "supervisor") {
    $gaji = 5000000;
} elseif ($jabatan == "staff") {
    $gaji = 3000000;
}


// jam kerja = 500
if ($jam_kerja > 300) {
    $bonus = ($jam_kerja - 200) * 20000;
} else {
    $bonus = 0;
}





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

      

    </form>

     <tbody>
    <tr >
      <td class="p-4 "><?php echo $gaji    ?></td>
      <td class="p-4"><?php echo $bonus    ?></td>
     
    </tr>
   
   
  </tbody> 

     
 </div>
 <div class="bg-white p-8 rounded-lg shadow-lg w-140 ml-10 ">
    <h2 class="text-2x1 font-semibold text-center mb-5">Hasil Penilaian</h2>

    <table class="table-auto">
 