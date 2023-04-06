<?php
    class Presiden
    {
        public $nama, $asalDaerah, $parpol;

        public function __construct($n, $as, $p)
        {
            $this->nama = $n;
            $this->asalDaerah = $as;
            $this->parpol = $p;
        }
        public function urutan()
        {
            return "$this->nama adalah presiden RI ";
        }
        public function getPresiden()
        {
            echo    "Nama : $this->nama  <br>
                     Asal Daerah : $this->asalDaerah <br>
                     Partai : $this->parpol";
        }
    }
$objekPresiden = new Presiden("Joko Widodo", "solo, jawa tengah", "PDI-Perjuangan");
$objekPresiden->getPresiden();
?>