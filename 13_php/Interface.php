<?php
 interface datas{
      public function data();
 }
// jualan jasa cetak
//ukuran A
//ukuran B
//ukur R
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

// inthitance adalah cara membuat sebuah hirarki dengan tujuan agar mempermudah membuat nilai spesial setiap object
class A extends Jasa implements datas
{
    public $gramKertas;

    public function __construct($nama = "Customer", $jenis = "Jenis", $jumlah = "Jumlah", $harga = "Harga", $tipe = "ukuran", $gram = "Grama kertas")
    {
        parent::__construct($nama, $jenis, $jumlah, $harga, $tipe);
        $this->gramKertas = $gram;
    }

    //overriding adalah cara untuk "mengambil alih" parent nya dimana dia dapat menimpa sebuah method dengan kondisi yang di sesuaikan
    public function data()
    {
        //dimana parent disini mengambil method dari parent nya
        $hasil = $this->datapelanggan();
        if ($this->Ukuran == "A4") {
            $hasil .= "| Detail : 21,0 x 29,7 cm | {$this->gramKertas} gsm | BY ".self::NAMACETAK;
        } elseif ($this->Ukuran == "A3") {
            $hasil .= "| Detail : 29,7 x 42,0 cm | {$this->gramKertas} gsm | BY ".self::NAMACETAK;
        } elseif ($this->Ukuran == "A5") {
            $hasil .= "| Detail : 14,8 x 21,0 cm | {$this->gramKertas} gsm | BY ".self::NAMACETAK;
        } else {
            echo "<script> alert('ukuran tidak tersedia')</script>";
        }
        return $hasil;
    }
};

class B extends Jasa implements datas
{
    public $jenisJilid;
    public function __construct($nama = "Customer", $jenis = "Jenis", $jumlah = "Jumlah", $harga = "Harga", $tipe = "ukuran", $jilid = "jenis Jilid")
    {
        parent::__construct($nama, $jenis, $jumlah, $harga, $tipe);
        $this->jenisJilid = $jilid;
    }

    public function data()
    {
        $hasil = $this->datapelanggan();
        if ($this->Ukuran == "B5") {
            $hasil .= "| Detail : 17,6 x 25,0 cm | {$this->jenisJilid} | BY ".self::NAMACETAK;
        } elseif ($this->Ukuran == "B4") {
            $hasil .= "| Detail : 25,0 x 35,3 cm | {$this->jenisJilid} | BY ".self::NAMACETAK;
        } else {
            echo "<script> alert('ukuran tidak tersedia')</script> | BY ".self::NAMACETAK;
        }
        return $hasil;
    }
};


class R extends Jasa implements datas
{

    public $kualitasFoto;
    public function __construct($nama = "Customer", $jenis = "Jenis", $jumlah = "Jumlah", $harga = "Harga", $tipe = "ukuran", $foto = "kualitas Foto")
    {
        parent::__construct($nama, $jenis, $jumlah, $harga, $tipe);
        $this->kualitasFoto = $foto;
    }

    public function data()
    {
        $hasil = "Ukuran {$this->Ukuran} : {$this->namaPelanggan} | {$this->jenisDokumen} | {$this->jumlahCetak} | {$this->hargaPerLembar}/perlembar ";
        if ($this->Ukuran == "2R") {
            $hasil .= "| Detail : 6,0 x 9,0 cm | {$this->kualitasFoto}HD | BY ".self::NAMACETAK;
        } elseif ($this->Ukuran == "4R") {
            $hasil .= "| Detail : 10,2 x 15,2 cm | {$this->kualitasFoto}4K | BY ".self::NAMACETAK;
        } elseif ($this->Ukuran == "10R") {
            $hasil .= "| Detail : 125,4 x 30,5 cm | {$this->kualitasFoto}4K | BY ".self::NAMACETAK;
        } else {
            echo "<script> alert('ukuran tidak tersedia')</script>";
        }
        return $hasil;
    }
};




class cetak
{
  public $daftarPelanggan=[];

  public function tambahpelanggan(jasa $pelanggan){
    $this->daftarPelanggan[]= $pelanggan;
  }

  public function cetaks(){
    $str ="DAFTAR PELANGGAN : <br>";

    foreach ($this->daftarPelanggan as $p){
        $str .= $p->data() ;
        $str .= "<br>";
    }
    return $str;
  }
}

// Ukuran A : Agus | JPG | x10 cetak | 1000/Perlembar 50% -> 500/Perlembar
$cetakA = new A("Ujang", "JPG", 10, 1000, "A4", 80,);
$cetakB = new B("Ani", "PNG", 20, 1500, "B5");

$cetakA->setDiscon(50);
$cetakA->getDiscon();
$cetakP = new cetak();
$cetakP->tambahpelanggan($cetakA);
$cetakP->tambahpelanggan($cetakB);
echo $cetakP->cetaks();
