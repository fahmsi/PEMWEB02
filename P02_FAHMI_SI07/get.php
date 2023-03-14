<?php 

$customer = $_GET['customer'];
$produk = $_GET['produk'];
$jumlah = $_GET['jumlah'];

echo "<h1>Rincian Belanja</h1><br>";
echo "Nama customer : " . $customer . "<br>";
echo "Produk yang dibeli : " . $produk . "<br>";
echo "Jumlah Belanjaan : " . $jumlah . "<br>";

?>