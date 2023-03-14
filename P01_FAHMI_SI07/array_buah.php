<?php
// membuat array
$arrayBuah = ["Jeruk","Manggis","Apel"];
// cara kedua
print_r($arrayBuah);
//menambahkan garis baru
echo "<br>";
// cara kedua
var_dump($arrayBuah);

// cara ketiga menampilkan buah
foreach($arrayBuah as $buah) {
    echo "<br>". $buah;
}