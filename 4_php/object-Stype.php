<?php

// jualan jasa cetak
//ukuran A
//ukuran B
//ukur R
// ukur Plano
class Jasa
{
    //cara memasukan nilai ke property satu langsung
    //Property (atribut)
    public $namaPelanggan;
    public $jenisDokumen;
    public $jumlahCetak;
    public $hargaPerLembar;

    //Method
    //__construct adalah sebuah special method/magic method yang dimana saatu sebuah Instance di hasil kan maka construct method akan aktif
    public function __construct($nama = "Customer", $jenis = "Jenis", $jumlah = "Jumlah", $harga = "Harga")
    {
        $this->namaPelanggan = $nama;
        $this->jenisDokumen = $jenis;
        $this->jumlahCetak = $jumlah;
        $this->hargaPerLembar = $harga;
    }


    public function customer()
    {
        //tambah kan $this untuk mendapatkan nilai dari property dari luar scope//parent scope
        return "$this->namaPelanggan,$this->jumlahCetak";
    }
}

    //object type
    //sebuah cara untuk membari "syarat"
class info
{
//jasa di paramater bertujuan untuk  memberi "syarat" sebuah nilai yang dapat di terima
//karena paramter $cetak bersifat general atau dapat di isi apa saja
    public function infoCustomer(Jasa $cetak)
    {
        //mengambil nilai dari sebuah property
        $hasil = "{$cetak->namaPelanggan} | Rp{$cetak->hargaPerLembar} Perlembar<br>
        {$cetak->jenisDokumen} <br>
        x{$cetak->jumlahCetak}";
        return $hasil;
    }
}


$cetakA = new Jasa("Ujang", "JPG", 10, 1000);
// $cetakA->namaPelanggan = "Ujang";
// $cetakA->jenisDokumen = "JPG";
// $cetakA->jumlahCetak = "10";
// $cetakA->hargaPerLembar = 1000;
echo "Customer : <br>
                Nama: {$cetakA->namaPelanggan} <br>
                Jenis Dokumen: {$cetakA->jenisDokumen}<br>
                Jumlah Cetak: {$cetakA->jumlahCetak} kali<br>
                Harga Perlembar : Rp{$cetakA->hargaPerLembar}";

echo "<br>";
echo "<br>";

$cetakB = new Jasa("Ani", "PNG", 20, 1500);
// $cetakB->namaPelanggan = "Ani";
// $cetakB->jenisDokumen = "PNG";
// $cetakB->jumlahCetak = 20;
// $cetakB->hargaPerLembar = 1500;
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

$cetakR = new Jasa("Budi");
var_dump($cetakR);

echo "<br>";
echo "<br>";

//menggunakan method
echo $cetakA->customer();
