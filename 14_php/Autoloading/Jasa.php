<?php
class Jasa
{
    //cara memasukan nilai ke property satu langsung
    //Property (atribut)
    private $namaPelanggan;
    private $jenisDokumen;
    private $jumlahCetak;
    private $hargaPerLembar;
    protected $Ukuran;
    protected $discon = 0;
    private $urut;
    private static $jumlah = 0;
    const NAMACETAK ="Cetak Jaya";

    //Method
    //__construct adalah sebuah special method/magic method yang dimana saatu sebuah Instance di hasil kan maka construct method akan aktif
    public function __construct($nama = "Customer", $jenis = "Jenis", $jumlah = "Jumlah", $harga = "Harga", $tipe = "ukuran")
    {
        $this->namaPelanggan = $nama;
        $this->jenisDokumen = $jenis;
        $this->jumlahCetak = $jumlah;
        $this->hargaPerLembar = $harga;
        $this->Ukuran = $tipe;
        //static adalah sebuah konsep untuk ya hanya bisa di akses oleh diri nya sendiri dan mengtiadakan instansi 
        self::$jumlah++;

        $this->urut = self::$jumlah;
    }


    public function customer()
    {
        //tambah kan $this untuk mendapatkan nilai dari property dari luar scope//parent scope
        return "$this->namaPelanggan,$this->jumlahCetak";
    }

    public function datapelanggan()
    {
        // Ukuran A : Agus | JPG | x10 cetak | 1000/Perlembar | Detail :
        $hasil = "Pelanggan ke {$this->urut} | {$this->namaPelanggan} : Ukuran {$this->Ukuran} | {$this->jenisDokumen} ";
        if ($this->discon != 0) {
            $hasil .= "| <del>{$this->hargaPerLembar}/perlembar</del> {$this->discon}% &rarr; {$this->getDiscon()}/Perlembar";
        } else {
            $hasil .= "| {$this->hargaPerLembar}/perlembar ";
        }
        return $hasil;
    }

    public function setDiscon($diskon)
    {
        $this->discon = $diskon;
    }

    public function getDiscon()
    {

        return $this->hargaPerLembar - ($this->hargaPerLembar * $this->discon / 100);
    }


    //setter dan getter adalah secara untuk mengubah dan mengakses sebuah visbility yang ada dan juga sebagai validasi data yang ada
    public function setNama($nama)
    {
        return $this->namaPelanggan = $nama;
    }

    public function getNama()
    {
        return $this->namaPelanggan;
    }


    public function setJenis($jenis)
    {
        return $this->jenisDokumen = $jenis;
    }

    public function getJenis()
    {
        return $this->jenisDokumen;
    }

    public function setJumlah($jumlah)
    {
        return $this->jumlahCetak = $jumlah;
    }

    public function getJumlah()
    {
        return $this->jumlahCetak;
    }

    public function setHarga($harga)
    {
        return $this->hargaPerLembar = $harga;
    }

    public function getHarga()
    {
        return $this->hargaPerLembar;
    }
}