<?php
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