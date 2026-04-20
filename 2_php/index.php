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
    public $namaPelanggan = "agus";
    public $jenisDokumen = "pdf";
    public $jumlahCetak = 5;
    public $hargaPerLembar = 500;

    //Method
    public function sayHello()
    {
        return "hellow word!";
    }


    public function customer()
    {
        //tambah kan $this untuk mendapatkan nilai dari property dari luar scope//parent scope
        return "$this->namaPelanggan,$this->jumlahCetak";
    }
}
//kedua timpa
// $CetakA = new Jasa();
// $CetakA->namaPelanggan = "Budi";
// var_dump($CetakA);
// echo "<br>";
// echo "<br>";
// $CetakB = new Jasa();
// $CetakB->namaPelanggan = "ani";
// var_dump($CetakB);
// echo "<br>";
// echo "<br>";
// //dapat juga menambahkan property
// $CetakR = new Jasa();
// $CetakR->Tambah = "Good";
// var_dump($CetakR);


// $CetakP = new Jasa();



$cetakA = new Jasa();
$cetakA->namaPelanggan = "Ujang";
$cetakA->jenisDokumen = "JPG";
$cetakA->jumlahCetak = "10";
$cetakA->hargaPerLembar = 1000;

echo "Customer : <br>
                Nama: {$cetakA->namaPelanggan} <br>
                Jenis Dokumen: {$cetakA->jenisDokumen}<br>
                Jumlah Cetak: {$cetakA->jumlahCetak} kali<br>
                Harga Perlembar : Rp{$cetakA->hargaPerLembar}";


echo "<br>";
echo "<br>";

$cetakB = new Jasa();
$cetakB->namaPelanggan = "Ani";
$cetakB->jenisDokumen = "PNG";
$cetakB->jumlahCetak = "20";
$cetakB->hargaPerLembar = 1500;


echo "Customer : <br>
                Nama: {$cetakB->namaPelanggan} <br>
                Jenis Dokumen: {$cetakB->jenisDokumen}<br>
                Jumlah Cetak: {$cetakB->jumlahCetak} kali<br>
                Harga Perlembar : Rp{$cetakB->hargaPerLembar}";

echo "<br>";
echo "<br>";

$cetak = new Jasa();
echo $cetak->sayHello();

echo "<br>";
echo "<br>";

//menggunakan method
echo $cetakA->customer();
