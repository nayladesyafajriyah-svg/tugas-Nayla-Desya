<?php

// Class Parent
class profesi {
    public function bekerja() {
        return "melakukan pekerjaan umum...";
    }
}

// Class Child 1
class guru extends profesi {
    // Method Overriding
    public function bekerja() {
        return "pergi ke kelas dan mengajar siswa SMK.";
    }
}

// Class Child 2
class programer extends profesi {
    // Method Overriding
    public function bekerja() {
        return "membuka VS Code, mengetik kode PHP, dan minum kopi.";
    }
}

// Membuat objek
$pakGuru = new guru();
$anakRPL = new programer();

// Menampilkan output
echo $pakGuru->bekerja();
echo "<br>";
echo $anakRPL->bekerja();

?>