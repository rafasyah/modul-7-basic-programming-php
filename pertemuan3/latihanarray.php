<?php
echo "<h1>tugas array</h1>";
echo "<hr>";
$nilaiulgn=[
    ['nama'=> "denis", "nilai" => 80,],
    ['nama'=> "aksa", "nilai" => 60 ],
    ['nama'=> "rangga", "nilai" => 45 ],
    ['nama'=> "bima", "nilai" => 72,],
    ['nama'=>  "aoddi","nilai" => 50 ]
    
];


echo '<table border ="1" cellspacing=0'  ;
echo '  <th>
            <td>nama</td>
            <td>nilai</td>
            <td>status</td>
             </th>
       
        
';

echo "<tr>";
foreach ($nilaiulgn as $n) {
  
    echo "<td>" ,$n['nama'],"</td>";
    echo "<td>" ,$n['nilai'],"</td>";
    if ($n ["nilai"] >=70) {
       $status ="<span style='color:green;'>Lulus</span>";
    }elseif ($n["nilai"]>=50){
        $status ="<span style='color:orange;'>Remedial</span>";
    }elseif ($n["nilai"]<=50){
        $status ="<span style='color:red;'>Tidak lulus</span>";
    }
    echo "<td>"  .$status."</td>";
    echo "</tr>";
}
// developer note: fuck you bitch next to me
echo "</table>";