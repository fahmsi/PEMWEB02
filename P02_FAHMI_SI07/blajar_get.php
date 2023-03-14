<?php
$nama = $_GET['nama'];
$jenis_kelamin = $_GET['jenis_kelamin'];
$hobi = $_GET['hobi'];
$nim = $_GET['nim'];
$prodi = $_GET['prodi'];

echo "<h1>Form Pendaftaran</h1><br>";
echo "Nama : " . $nama . "<br>";
echo "Jenis Kelamin : " . $jenis_kelamin . "<br>";
echo "Hobi : " . $hobi . "<br>";
echo "Nim : " . $nim . "<br>";
echo "Program Studi : " . $prodi;