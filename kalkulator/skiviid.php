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
$bilangan1="";
$bilangan2="";
$hasil="";
$operasi="";
if(isset($_POST['hitung'])){
  $bilangan1 = $_POST['bil1'];
  $bilangan2 = $_POST['bil2'];
  $operasi = $_POST['operasi'];

switch ($operasi) {
  case 'tambah':
    $hasil = $bilangan1 + $bilangan2;
    break;
    case 'kurang':
      $hasil = $bilangan1 - $bilangan2;
      break;
      case 'kali':
        $hasil = $bilangan1 *  $bilangan2;
        break;
        case 'bagi':
          $hasil = $bilangan1 / $bilangan2;
          break;
}
}
?>

 <div class="bg-white p-8 rounded-lg shadow-lg w-96">
    <h2 class="text-2x1 font-semibold text-center mb-5">Kalkulator</h2>

    <form action="" method="POST">
      <input type="text" name="bil1" class="w-full p-3 mb-4 border border-gray-300 rounded-md " 
      placeholder="Masukkan Bilangan Pertama" autocomplete="off" value= <?php echo $bilangan1; ?>>
      <input type="text" name="bil2" class="w-full p-3 mb-4 border border-gray-300 rounded-md " 
      placeholder="Masukkan Bilangan Kedua" autocomplete="off" value= <?php echo $bilangan2; ?>>
      
      <select name="operasi" id=""  class="w-full p-3 mb-4 border border-gray-300 rounded-md "  >
        <option value="tambah">+</option>
        <option value="kurang">-</option>
        <option value="kali">x</option>
        <option value="bagi">;</option>
      </select>

      <input type="submit" name="hitung" value="hitung" class="w-full p-3 mb-4 border border-gray-300 rounded-md bg-blue-300 text-white " >

      <input type="text" name="" class="w-full p-3 mb-4 border border-gray-300 rounded-md " 
      placeholder="Hasil Bilangan" readonly value ="
      <?php   
      
      echo $hasil;
      
      
     
      
      ?>">

    </form>

     
 </div>
</body>
</html>
