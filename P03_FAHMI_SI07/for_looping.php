<?php
for ($i = 1; $i < 10 ; $i++) { 
    echo "ini looping ke-$i <br>" ;
}

echo "<br>";

$array = ['kucing','anjing','badak','kapibara'];
//  count berfungsi untuk menghitung panjang array
for ($i = 0; $i < count($array);$i++){
    echo $array[$i] "<br>";
}

