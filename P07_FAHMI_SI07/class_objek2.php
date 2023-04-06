<?php
class Kendaraan
{
    public $nama, $warna, $jenis, $jumlahRoda, $kapasitasMesin;

    public function ngebut()
    {
        return "$this->nama adalah kendaraan yang bisa ngebut !";
    }
    public function ngerem()
    {
        return "$this->nama adalah kendaraan yang bisa ngerem !";
    }
    public function getKendaraan()
    {
        echo   "Nama : $this->nama <br>
                Warna : $this->warna <br>
                Jenis : $this->jenis <br>
                Jumlah Roda : $this->jumlahRoda <br>
                kapasitas Mesin : $this->kapasitasMesin cc";
    }
}
$objek = new Kendaraan;
$objek->nama = "Ford Mustang";
$objek->warna = "Biru Ocean";
$objek->jenis = "Sport Car";
$objek->jumlahRoda = "4";
$objek->kapasitasMesin = "5000 ";
echo $objek->ngebut();
echo "<br>";
$objek->getKendaraan();
?>