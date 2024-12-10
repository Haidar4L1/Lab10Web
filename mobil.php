<?php
/**
 * Program sederhana pendefinisian class dan pemanggilan class.
 */
class Mobil
{
    private $warna;
    private $merk;
    private $harga;

    /**
     * Constructor untuk inisialisasi properti default.
     */
    public function __construct()
    {
        $this->warna = "Biru";
        $this->merk = "BMW";
        $this->harga = "10000000";
    }

    /**
     * Mengubah warna mobil.
     *
     * @param string $warnaBaru Warna baru yang akan diterapkan.
     */
    public function gantiWarna($warnaBaru)
    {
        $this->warna = $warnaBaru;
    }

    /**
     * Menampilkan warna mobil.
     */
    public function tampilWarna()
    {
        echo "Warna mobilnya: " . $this->warna;
    }
}

// Membuat objek mobil
$a = new Mobil();
$b = new Mobil();

// Memanggil objek mobil pertama
echo "<b>Mobil pertama</b><br>";
$a->tampilWarna();
echo "<br>Mobil pertama ganti warna<br>";
$a->gantiWarna("Merah");
$a->tampilWarna();

// Memanggil objek mobil kedua
echo "<br><b>Mobil kedua</b><br>";
$b->gantiWarna("Hijau");
$b->tampilWarna();
?>
