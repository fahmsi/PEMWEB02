<?php
$arrayBuah = ["Jeruk","Manggis","Apel","Pisang","Delima"];
// berdasarkan abjat
sort($arrayBuah);
// menghapus value array paling akhir
array_pop($arrayBuah);
// menghapus value yang dituju sesuai urutan
unset($arrayBuah[2]);
// menambahkan value di paling akhir
array_push($arrayBuah,"Buang Naga");
// menghapus value pertama atau paling pertama
array_shift($arrayBuah);
// menambahkan value di paling pertama
array_unshift($arrayBuah, "Semangka");
// menggubah value array dengan spesifik key/index
$arrayBuah[1] = "Anggur";
foreach($arrayBuah as $buah) {
    echo "<br>". $buah;
}