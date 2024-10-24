<?php
// Class Barang
class Barang {
    public $namaBarang;
    public $jenisBarang;
    public $jumlahBarang;
    public $pembelian;

    // Constructor untuk inisialisasi properties/atribut
    public function __construct($namaBarang = '', $jenisBarang = '', $jumlahBarang = 0, $stok = 0, $pembelian = 0) {
        $this->namaBarang = $namaBarang;
        $this->jenisBarang = $jenisBarang;
        $this->jumlahBarang = $jumlahBarang;
        $this->pembelian = $pembelian;
    }

    // Fungsi untuk menampilkan data pelanggan
    public function tampilkanDataBarang() {
        return "NamaBarang: $this->namaBarang, JenisBarang: $this->jenisBarang, JumlahBarang: $this->jumlahBarang";
    }
}

// Inisialisasi variabel customer dan hasil
$Barang = null;
$outputBarang = "";

// Jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Buat instance Barang dengan data dari form
    $Barang = new Barang(
        $_POST['namaBarang'],
        $_POST['jenisBarang'],
        $_POST['jumlahBarang'],
        intval($_POST['pembelian'])
    );

    // Menampilkan data Barang
    $outputBarang = $Barang->tampilkanDataBarang();
}
?>

<!-- Form input untuk menguji -->
<form method="POST" action="">
    <h3>Data barang</h3>
    Nama Barang: <input type="text" name="namaBarang" required><br>
    Jenis Barang: <input type="text" name="jenisBarang" required><br>
    Jumlah Barang: <input type="number" name="jumlahBarang" required><br>
    Jumlah Pembelian: <input type="number" name="pembelian" required><br>
    <input type="submit" value="Simpan Data Barang">
</form>

<!-- Output data customer -->
<?php
if ($outputBarang !== "") {
    echo "<h3>Informasi Barang</h3>";
    echo $outputBarang;
}
?>