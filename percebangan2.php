<?php

$uts = 75;
$uas = 85;
$tugas = 78;

$status = "";
$grade = "";

$rata =(($uts * $uas) + $tugas) / ($uas + 1);
if ($rata >= 70 && $rata <= 79){
    $status ="perbaikan";
    $grade = "C";
}elseif($rata>=80){
    $status ="lulus";
    $grade="B";
}elseif($rata>=85){
    $status ="baik";
    $grade="A";
}elseif($rata>=100){
    $status ="Sangat baik";
    $grade="A+";
}

echo "uts $uts<br>";
echo "uas $uas<br>";
echo "tugas $tugas<br>";
echo "rata $rata<br>";
echo "status $status<br>";
echo "grades $grade<br>";