<?php

class siswa {
    // Property private, tidak bisa diubah langsung dari luar class
    private $nama;
    private $nilai;

    // Method public untuk mengisi data (setter)
    public function setData($namaBaru, $nilaiBaru) {
        $this->nama = $namaBaru;

        // Validasi: nilai tidak boleh lebih dari 100
        if ($nilaiBaru <= 100) {
            $this->nilai = $nilaiBaru;
        } else {
            $this->nilai = 100;
        }
    }

    // Method public untuk mengambil data (getter)
    public function getInfo() {
        return "Siswa: " . $this->nama .
               ", nilai PBO: " . $this->nilai;
    }
}

// Membuat objek siswa
$siswa1 = new siswa();

// Mengisi data siswa
$siswa1->setData("Budi", 85);

// Menampilkan informasi siswa
echo $siswa1->getInfo();

?>