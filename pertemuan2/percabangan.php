<?php

$umur = readline(prompt: "masukkan usia anda : ");

if($umur == 0){
 echo "usia bayi";
}elseif ($umur>= 1 && $umur <= 12){
echo "usia anak anak";
}elseif ($umur>= 13 && $umur <= 17){
    echo "usia remaja";
    }elseif ($umur>= 18 && $umur <= 50){
        echo "dewasa";
       }  elseif ($umur>=50){
        echo "usia lansia";
        }



      