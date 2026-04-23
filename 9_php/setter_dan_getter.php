<?php

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

    //Method
    //__construct adalah sebuah special method/magic method yang dimana saatu sebuah Instance di hasil kan maka construct method akan aktif
    public function __construct($nama = "Customer", $jenis = "Jenis", $jumlah = "Jumlah", $harga = "Harga", $tipe = "ukuran")
    {
        $this->namaPelanggan = $nama;
        $this->jenisDokumen = $jenis;
        $this->jumlahCetak = $jumlah;
        $this->hargaPerLembar = $harga;
        $this->Ukuran = $tipe;
    }


    public function customer()
    {
        //tambah kan $this untuk mendapatkan nilai dari property dari luar scope//parent scope
        return "$this->namaPelanggan,$this->jumlahCetak";
    }

    public function data()
    {
        // Ukuran A : Agus | JPG | x10 cetak | 1000/Perlembar | Detail :
        $hasil = "Ukuran {$this->Ukuran} : {$this->namaPelanggan} | {$this->jenisDokumen} ";
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
class A extends Jasa
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
        $hasil = parent::data();
        if ($this->Ukuran == "A4") {
            $hasil .= "| Detail : 21,0 x 29,7 cm | {$this->gramKertas} gsm";
        } elseif ($this->Ukuran == "A3") {
            $hasil .= "| Detail : 29,7 x 42,0 cm | {$this->gramKertas} gsm";
        } elseif ($this->Ukuran == "A5") {
            $hasil .= "| Detail : 14,8 x 21,0 cm | {$this->gramKertas} gsm";
        } else {
            echo "<script> alert('ukuran tidak tersedia')</script>";
        }
        return $hasil;
    }
};

class B extends Jasa
{
    public $jenisJilid;
    public function __construct($nama = "Customer", $jenis = "Jenis", $jumlah = "Jumlah", $harga = "Harga", $tipe = "ukuran", $jilid = "jenis Jilid")
    {
        parent::__construct($nama, $jenis, $jumlah, $harga, $tipe);
        $this->jenisJilid = $jilid;
    }

    public function data()
    {
        $hasil = parent::data();
        if ($this->Ukuran == "B5") {
            $hasil .= "| Detail : 17,6 x 25,0 cm | {$this->jenisJilid}";
        } elseif ($this->Ukuran == "B4") {
            $hasil .= "| Detail : 25,0 x 35,3 cm | {$this->jenisJilid}";
        } else {
            echo "<script> alert('ukuran tidak tersedia')</script>";
        }
        return $hasil;
    }
};


class R extends Jasa
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
            $hasil .= "| Detail : 6,0 x 9,0 cm | {$this->kualitasFoto}HD ";
        } elseif ($this->Ukuran == "4R") {
            $hasil .= "| Detail : 10,2 x 15,2 cm | {$this->kualitasFoto}4K";
        } elseif ($this->Ukuran == "10R") {
            $hasil .= "| Detail : 125,4 x 30,5 cm | {$this->kualitasFoto}4K";
        } else {
            echo "<script> alert('ukuran tidak tersedia')</script>";
        }
        return $hasil;
    }
};



//object type
//sebuah cara untuk menggunakan object menjadi sebuah value
class info extends Jasa
{
    //jasa di paramater bertujuan untuk  menspesifikan sebuah nilai yang dapat di terima
    //karena paramter $cetak bersifat general
    public function infoCustomer(Jasa $cetak)
    {
        //mengambil nilai dari sebuah property
        $hasil = "{$cetak->namaPelanggan} | Perlembar Rp{$cetak->hargaPerLembar} <br>
        {$cetak->jenisDokumen} <br>
        x{$cetak->jumlahCetak}";
        return $hasil;
    }
}


$cetakA = new A("Ujang", "JPG", 10, 1000, "A4", 80,);
$cetakB = new B("Ani", "PNG", 20, 1500, "B5");
$cetakA->setDiscon(50);
$cetakA->getDiscon();
// Ukuran A : Agus | JPG | x10 cetak | 1000/Perlembar 50% -> 500/Perlembar
echo $cetakA->data();
echo "<br>";
echo $cetakB->data();

echo "<hr>"; 
