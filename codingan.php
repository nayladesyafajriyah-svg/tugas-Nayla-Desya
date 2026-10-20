<?php

// 1. Class Parent (Superclass) - Enkapsulasi
class Karyawan {
    protected $ngaran;
    protected $nik;
    protected $gajiBulanan;

    // Constructor untuk menginisialisasi nilai
    public function __construct($ngaran, $nik, $gajiBulanan) {
        $this->ngaran = $ngaran;
        $this->nik = $nik;
        $this->gajiBulanan = $gajiBulanan;
    }

    // Getter dan Setter untuk Ngaran
    public function getNgaran() {
        return $this->ngaran;
    }

    public function setNgaran($ngaran) {
        $this->ngaran = $ngaran;
    }

    // Getter dan Setter untuk NIK
    public function getNik() {
        return $this->nik;
    }

    public function setNik($nik) {
        $this->nik = $nik;
    }

    // Getter dan Setter untuk Gaji Bulanan
    public function getGajiBulanan() {
        return $this->gajiBulanan;
    }

    public function setGajiBulanan($gajiBulanan) {
        $this->gajiBulanan = $gajiBulanan;
    }

    // Method hitungTotalGaji dasar
    public function hitungTotalGaji() {
        return $this->gajiBulanan;
    }
}

// 2. Class Child KaryawanTetap
// Pewarisan dan Method Overriding
class KaryawanTetap extends Karyawan {
    private $tunjanganKeluarga;

    public function __construct(
        $ngaran,
        $nik,
        $gajiBulanan,
        $tunjanganKeluarga
    ) {
        parent::__construct($ngaran, $nik, $gajiBulanan);
        $this->tunjanganKeluarga = $tunjanganKeluarga;
    }

    public function getTunjanganKeluarga() {
        return $this->tunjanganKeluarga;
    }

    public function setTunjanganKeluarga($tunjanganKeluarga) {
        $this->tunjanganKeluarga = $tunjanganKeluarga;
    }

    // Gaji bulanan + tunjangan keluarga - pajak 5%
    public function hitungTotalGaji() {
        $gajiKotor = $this->gajiBulanan + $this->tunjanganKeluarga;
        $potonganPajak = $gajiKotor * 0.05;

        return $gajiKotor - $potonganPajak;
    }
}

// 3. Class Child KaryawanKontrak
// Pewarisan dan Method Overriding
class KaryawanKontrak extends Karyawan {
    private $durasiKontrakBulan;
    private $bonusLembur;

    public function __construct(
        $ngaran,
        $nik,
        $gajiBulanan,
        $durasiKontrakBulan,
        $bonusLembur
    ) {
        parent::__construct($ngaran, $nik, $gajiBulanan);
        $this->durasiKontrakBulan = $durasiKontrakBulan;
        $this->bonusLembur = $bonusLembur;
    }

    public function getDurasiKontrakBulan() {
        return $this->durasiKontrakBulan;
    }

    public function setDurasiKontrakBulan($durasiKontrakBulan) {
        $this->durasiKontrakBulan = $durasiKontrakBulan;
    }

    public function getBonusLembur() {
        return $this->bonusLembur;
    }

    public function setBonusLembur($bonusLembur) {
        $this->bonusLembur = $bonusLembur;
    }

    // Gaji bulanan + bonus lembur tanpa potongan pajak
    public function hitungTotalGaji() {
        return $this->gajiBulanan + $this->bonusLembur;
    }
}

// 4. Instansiasi dan Pengujian
echo "=== HASIL PERHITUNGAN GAJI KARYAWAN ===<br><br>";

// Membuat objek Karyawan Tetap
$karyawan1 = new KaryawanTetap(
    "Aila Hasna Azkia",
    "3201123456780001",
    4500000,
    750000
);

echo "<b>Data Karyawan Tetap:</b><br>";
echo "Ngaran: " . $karyawan1->getNgaran() . "<br>";
echo "NIK: " . $karyawan1->getNik() . "<br>";
echo "Gaji Bulanan: Rp " .
    number_format($karyawan1->getGajiBulanan(), 0, ',', '.') . "<br>";
echo "Tunjangan Keluarga: Rp " .
    number_format($karyawan1->getTunjanganKeluarga(), 0, ',', '.') . "<br>";
echo "<b>Total Gaji Bersih: Rp " .
    number_format($karyawan1->hitungTotalGaji(), 0, ',', '.') .
    "</b><br><br>";

echo "----------------------------------------<br><br>";

// Membuat objek Karyawan Kontrak
$karyawan2 = new KaryawanKontrak(
    "Nayla Desya Fajriyah",
    "3201987654320002",
    3500000,
    12,
    500000
);

echo "<b>Data Karyawan Kontrak:</b><br>";
echo "Ngaran: " . $karyawan2->getNgaran() . "<br>";
echo "NIK: " . $karyawan2->getNik() . "<br>";
echo "Gaji Bulanan: Rp " .
    number_format($karyawan2->getGajiBulanan(), 0, ',', '.') . "<br>";
echo "Durasi Kontrak: " .
    $karyawan2->getDurasiKontrakBulan() . " Bulan<br>";
echo "Bonus Lembur: Rp " .
    number_format($karyawan2->getBonusLembur(), 0, ',', '.') . "<br>";
echo "<b>Total Gaji Bersih: Rp " .
    number_format($karyawan2->hitungTotalGaji(), 0, ',', '.') .
    "</b><br>";

?>
