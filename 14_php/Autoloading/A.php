<?php
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