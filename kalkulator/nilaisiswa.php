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
$nama="";
$tugas="";
$uts="";
$uas="";
$hasilakhir="";
$new_tugas="";
$new_uts="";
$new_uas="";
$kategori="";


$percentagetugas = 30;
$percentageuts = 30;
$percentageuas = 40;



// isset() memeriksa apakah variabel ada dan tidak bernilai null 
//         mengembalikan true jika variabel tidak null.

// !isset() memeriksa apakah variabel tidak ada dan bernilai null 
//         mengembalikan true jika variabel  tidak ada atau null.

// session : digunakan untuk menyimpan data sementara yang dapat diakses 
// oleh pengguna selama periode tertentu


// inisialisasi sesi untuk menyimpan data siswa
session_start();

// memeriksa apakah $_SESSION['siswalist'] sudah ada dalam sesi atau belum
if(!isset($_SESSION['siswalist'])){   true;
$_SESSION['siswalist']=[];   //  jika kondisi true maka akan dibuatkan array kosong

}

if($_SERVER["REQUEST_METHOD"]== "POST"){
// cek apakah inputan form ada dan tidak kosong
if(isset ($_POST ['namasiswa']) && isset($_POST ['nilaitugas']) && isset($_POST['nilaiuts']) && isset ($_POST['nilaiuas'])){

  // ambil imputan dari form

  $nama = $_POST['namasiswa'];
  $tugas = $_POST['nilaitugas'];
  $uts = $_POST['nilaiuts'];
  $uas = $_POST['nilaiuas'];

  $new_tugas = ($percentagetugas / 100) * $tugas;
  $new_uts = ($percentageuts / 100) * $uts;
  $new_uas = ($percentageuas / 100) * $uas;
  $hasilakhir= $new_tugas + $new_uts + $new_uas ;
  
  if ($hasilakhir >= 85) {
   $kategori="A";
  }
 else if ($hasilakhir >= 70) {
    $kategori="B";
   }
   else if ($hasilakhir >= 60) {
    $kategori="C";
   }
   else if ($hasilakhir >= 50) {
    $kategori="D";
   }
}



// simpan data ke dalam sesi

$_SESSION['siswalist'][]=[
   'nama' =>$nama,
   'nilai_akhir' => $hasilakhir, // sesuaikan dengan var masing2
   'kategori'=> $kategori,  // sesuaikan dengan var masing2
];


}
// cek jika tombol hapus data di klik, maka sesi akan dihancurkan
if(isset($_POST['hapus_data'])){
  session_destroy(); //hapus seluruh data sesi

  session_start();
  $_SESSION['siswalist'] =[];
}

?>

 <div class="bg-white p-8 rounded-lg shadow-lg w-96 ">
    <h2 class="text-2x1 font-semibold text-center mb-5">form input nilai siswa</h2>

    <form action="" method="POST">
        <p>Nama Siswa</p>
      <input type="text" name="namasiswa" class="w-full p-3 mb-4 border border-gray-300 rounded-md " 
      autocomplete="off" >
      <p>Nilai Tugas</p>
      <input type="text" name="nilaitugas" class="w-full p-3 mb-4 border border-gray-300 rounded-md " 
      autocomplete="off" value= >
      <p>Nilai UTS</p>
      <input type="text" name="nilaiuts" class="w-full p-3 mb-4 border border-gray-300 rounded-md " 
      autocomplete="off" value= >
      <p>Nilai UAS</p>
      <input type="text" name="nilaiuas" class="w-full p-3 mb-4 border border-gray-300 rounded-md " 
      autocomplete="off" value=>
      

      <input type="submit" name="hitung" value="hitung" class="w-full p-3 mb-4 border border-gray-300 rounded-md bg-blue-300 text-white " >

      

    </form>

   

     
 </div>
 <div class="bg-white p-8 rounded-lg shadow-lg w-140 ml-10 ">
    <h2 class="text-2x1 font-semibold text-center mb-5">Hasil Penilaian</h2>

    <table class="table-auto">
  <thead>
    <tr>
      <th class="p-4 text-white bg-gray-600 ">Nama</th>
      <!-- <th class="p-4 text-white bg-gray-600">Nilai Tugas</th>
      <th class="p-4 text-white bg-gray-600">Nilai UTS</th>
      <th class="p-4 text-white bg-gray-600">Nilai UAS</th> -->
      <th class="p-4 text-white bg-gray-600">Nilai Akhir</th>
      <th class="p-4 text-white bg-gray-600">Kategori</th>
    </tr>
  </thead>
  <!-- <tbody>
    <tr >
      <td class="p-4 "><?php
      //  echo $nama    ?></td>
      <td class="p-4"><?php 
      // echo $tugas    ?></td>
      <td class="p-4"><?php 
      // echo $uts    ?></td>
      <td class="p-4"><?php 
      // echo $uas    ?></td>
      <td name="hasilakhir" id=''><?php 
      // echo $hasilakhir    ?></td>
      <td class="p-4"><?php 
      // echo $kategori  ?></td> </td>
    </tr>
   
   
  </tbody> -->

  <tbody>
    <!-- memangil isi array -->
    <?php foreach ($_SESSION['siswalist'] as $list);?>
        
    <tr >
       <td><?= ($list['nama'])?></td>
       <td><?= ($list['nilai_akhir'])?></td>
       <td><?= ($list['kategori'])?></td>
    </tr>
    

</table>

   

     
 </div>
</body>
</html>
