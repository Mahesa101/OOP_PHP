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

    public function data()
    {
        // Ukuran A : Agus | JPG | x10 cetak | 1000/Perlembar | Detail :
        $hasil = "Ukuran {$this->Ukuran} : {$this->namaPelanggan} | {$this->jenisDokumen} | {$this->jumlahCetak} | {$this->hargaPerLembar}/perlembar ";
        return $hasil;
    }
}


class A extends Jasa
{

    public function data()
    {
        $hasil = "Ukuran {$this->Ukuran} : {$this->namaPelanggan} | {$this->jenisDokumen} | {$this->jumlahCetak} | {$this->hargaPerLembar}/perlembar ";
        if ($this->Ukuran == "A4") {
            $hasil .= "| Detail : 21,0 x 29,7 cm";
        } elseif ($this->Ukuran == "A3") {
            $hasil .= "| Detail : 29,7 x 42,0 cm";
        } elseif ($this->Ukuran == "A5") {
            $hasil .= "| Detail : 14,8 x 21,0 cm";
        } else {
            echo "<script> alert('ukuran tidak tersedia')</script>";
        }
        return $hasil;
    }
};

class B extends Jasa
{

    public function data()
    {
        $hasil = "Ukuran {$this->Ukuran} : {$this->namaPelanggan} | {$this->jenisDokumen} | {$this->jumlahCetak} | {$this->hargaPerLembar}/perlembar ";
        if ($this->Ukuran == "B5") {
            $hasil .= "| Detail : 17,6 x 25,0 cm";
        } elseif ($this->Ukuran == "B4") {
            $hasil .= "| Detail : 25,0 x 35,3 cm";
        } else {
            echo "<script> alert('ukuran tidak tersedia')</script>";
        }
        return $hasil;
    }
};


class R extends Jasa
{

    public function data()
    {
        $hasil = "Ukuran {$this->Ukuran} : {$this->namaPelanggan} | {$this->jenisDokumen} | {$this->jumlahCetak} | {$this->hargaPerLembar}/perlembar ";
        if ($this->Ukuran == "2R") {
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
};



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


$cetakA = new A("Ujang", "JPG", 10, 1000, "A4");
$cetakB = new B("Ani", "PNG", 20, 1500, "B5");


$infoCetakA = new info();
echo $infoCetakA->infoCustomer($cetakA);

echo "<br>";
echo "<br>";

// Ukuran A : Agus | JPG | x10 cetak | 1000/Perlembar
echo $cetakA->data();
echo "<br>";
echo $cetakB->data();


//inheritance terlihat boros dalam pemprograman tetapi pada kenyataannya saat skala sudah lebih komples inheritance akan jauh lebih berguna di karena banyak nya nilai khusu pada subah object atau instance