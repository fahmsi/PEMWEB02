<?php 
  class Bola {
    public $jariJari;
  
    public function __construct($jariJari) {
      $this->jariJari = $jariJari;
    }
  
    public function getLuas() {
      return 4 * M_PI * pow($this->jariJari, 2);
    }
  
    public function getVolume() {
      return (4/3) * M_PI * pow($this->jariJari, 3);
    }
  }
  
  // Membuat objek Bola
  $bola1 = new Bola(70);
  
  // Menampilkan hasil perhitungan untuk objek Bola
  echo "HASIL PERHITUNGAN OBJEK BOLA ADALAH:" . "<br>";
  echo "Luas: " . $bola1->getLuas() . "<br>";
  echo "Volume: " . $bola1->getVolume();
  
?>