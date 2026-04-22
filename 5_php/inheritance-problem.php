<?php

// jualan jasa cetak
//ukuran A
//ukuran B
//ukur R
class Jasa
{
    //cara memasukan nilai ke property satu langsung
    //Property (atribut)
    public $namaPelanggan;
    public $jenisDokumen;
    public $jumlahCetak;
    public $hargaPerLembar;
    public $Ukuran;

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

    public function infolengkap()
    {
        // Ukuran A : Agus | JPG | x10 cetak | 1000/Perlembar | Detail :
        $hasil = "Ukuran {$this->Ukuran} : {$this->namaPelanggan} | {$this->jenisDokumen} | {$this->jumlahCetak} | {$this->hargaPerLembar}/perlembar ";
        if ($this->Ukuran == "A4") {
            $hasil .= "| Detail : 21,0 x 29,7 cm";
        } elseif ($this->Ukuran == "A3") {
            $hasil .= "| Detail : 29,7 x 42,0 cm";
        } elseif ($this->Ukuran == "A5") {
            $hasil .= "| Detail : 14,8 x 21,0 cm";
        } elseif ($this->Ukuran == "B5") {
            $hasil .= "| Detail : 17,6 x 25,0 cm";
        } elseif ($this->Ukuran == "B4") {
            $hasil .= "| Detail : 25,0 x 35,3 cm";
        } elseif ($this->Ukuran == "2R") {
            $hasil .= "| Detail : 6,0 x 9,0 cm";
        } elseif ($this->Ukuran == "4R") {
            $hasil .= "| Detail : 10,2 x 15,2 cm";
        } elseif ($this->Ukuran == "10R") {
            $hasil .= "| Detail : 125,4 x 30,5 cm";
        } else {
            echo "<script> alert('ukuran tidak tersedia')</script>";
        }
        return $hasil;
    }
}

//object type
//sebuah cara untuk menggunakan object menjadi sebuah value
class info
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


$cetakA = new Jasa("Ujang", "JPG", 10, 1000,"A4");
echo "Customer : <br>
                Nama: {$cetakA->namaPelanggan} <br>
                Jenis Dokumen: {$cetakA->jenisDokumen}<br>
                Jumlah Cetak: {$cetakA->jumlahCetak} kali<br>
                Harga Perlembar : Rp{$cetakA->hargaPerLembar}";

echo "<br>";
echo "<br>";

$cetakB = new Jasa("Ani", "PNG", 20, 1500,"B5");
echo "Customer : <br>
                Nama: {$cetakB->namaPelanggan} <br>
                Jenis Dokumen: {$cetakB->jenisDokumen}<br>
                Jumlah Cetak: {$cetakB->jumlahCetak} kali<br>
                Harga Perlembar : Rp{$cetakB->hargaPerLembar}";


echo "<br>";
echo "<br>";

$infoCetakA = new info();
echo $infoCetakA->infoCustomer($cetakA);

echo "<br>";
echo "<br>";

// Ukuran A : Agus | JPG | x10 cetak | 1000/Perlembar
echo $cetakA ->infolengkap();
echo "<br>";
echo "<br>";
echo $cetakB ->infolengkap();


//permasalah utama jika tidak menggunakan inheritance adalah tidak felsibel dari penggunaan nilai khusus pada nilai di dalam object dimana jika suatu object memiliki nilai khusus maka hal itu akan perlu effort yang lebih untuk mengantur agar tidak membuat error nilai khusu object lain nya