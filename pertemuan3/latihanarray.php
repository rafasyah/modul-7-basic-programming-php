<?php
$nilaiulgn=[
    ['nama'=> "denis", "nilai" => 85, "status" => "lulus"],
    ['nama'=> "aksa", "nilai" => 60, "status" => "remedial"],
    ['nama'=> "rangga", "nilai" => 45, "status" => "tidak lulus"],
    ['nama'=> "bima", "nilai" => 72, "status" => "lulus"],
    ['nama'=> "aoddi", "nilai" => 50, "status" => "remedial"]
    
];

if ($siswa["nilai"] >=70) {
    echo '<span style="color:#AFA;>"lulus"</span>';

}

echo '<table border ="1" cellspacing=0'  ;
echo '<tr><th>nama</th><th>nilai</th><th>status</th>';

foreach ($nilaiulgn as $n) {
    echo "<tr><td>{$n['nama']}</td><td>{$n['nilai']}</td><td>{$n['status']}</td></tr>";
}
