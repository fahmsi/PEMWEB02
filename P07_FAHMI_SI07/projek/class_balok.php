<?php 
  class BaloK {
    public $panjang,$lebar,$tinggi;
    
    public function __construct($panjang, $lebar, $tinggi) {
      $this->panjang = $panjang;
      $this->lebar = $lebar;
      $this->tinggi = $tinggi;
    }
          
    public function getLuas() {
    return 2 * (($this->panjang * $this->lebar) + ($this->panjang * $this->tinggi) + ($this->lebar * $this->tinggi));
    }
          
    public function getVolume() {
    return $this->panjang * $this->lebar * $this->tinggi;
    }
} 
// Membuat objek-objek Balok
$balok = new BaloK(29, 16, 7);
// Menampilkan hasil perhitungan untuk objek Balok
echo "HASIL PERHITUNGAN OBJEK BALOK ADALAH:\n <br>";
echo "Luas: " . $balok->getLuas() . "\n<br>";
echo "Volume: " . $balok->getVolume() . "\n\n<br><br>";
?>