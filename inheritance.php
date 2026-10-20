<?php

// Class induk (parent)
class kendaraan 
{

   public $merk;
   public function __construct($merk)
   {

        $this->merk = $merk;
   }
   public function berjalan()
   {

      return $this->merk . " sedang melaju...";
   }
}
//Class anak (child) merawrisi class kendaraan
class mobil extends kendaraan
{
    public $jumlahPintu = 4;
    public function bukaPintu()
    {

        return "membuka" . $this->jumlahPintu . " pintu mobil " . $this->merk; 
    }
}

$mobilRPL = new mobil("toyota");
echo $mobilRPL->berjalan(); // menggunakan method barisan dari parent
echo "<br>";
echo $mobilRPL->bukaPintu(); // menggunakan method milik child sendiri