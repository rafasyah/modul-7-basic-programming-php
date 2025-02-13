<!-- array -->

<?php

// definisi array
$produk= ["laptop","mouse","keyboard"];
echo $produk[0]. "<br>";
echo $produk[1]. "<br>";
echo $produk[2]. "<br>";

// array asossiatif
$buah = [
    "nama" => "apel",
    "warna" => "hijau",
    "rasa" => "asam"

    
    
];

echo "nama buah" . $buah ['nama'] ."<br>";
echo "warna buah" . $buah ['warna'] ."<br>";
echo "rasa buah". $buah ['rasa'] ."<br>";   

echo "<h1>Daftar Produk</h1>";
$produk2=[
 ['nama'=> "laptop", "harga" => 7000000, "stok" => 10],
 ['nama'=> "mouse", "harga" => 100000, "stok" => 10],
 ['nama'=> "monitor", "harga" => 1500000, "stok" => 10]
];

foreach ($produk2 as $p) {
    echo "nama produk " . $p ["nama"] . 

    "harga: Rp " . number_format(num: $p ["harga"],
    decimals:0, decimal_separator:",",
    thousands_separator: ".") .


 ". stok " .$p ["stok"] .  
 "<br><hr>";
}
    